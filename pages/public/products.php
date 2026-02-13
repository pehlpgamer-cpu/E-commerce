<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/global.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    
    <title>Products</title>
</head>
<body class="bg-white flex flex-col">
    
    <nav id="navContainer" class="flex justify-evenly gap-2 border-b p-1.5 bg-white">
        <!-- 
        <script type=module>
            import { topNavBar } from "../../js/components/topNavBar.js";
            const navContainer = document.getElementById('navContainer');
            navContainer.innerHTML = topNavBar(2);
        </script> 
        -->
    </nav>
    <search class="p-2 border-b flex gap-2">
        
            <div class="flex flex-col grow">
                <label>Product</label>
                <input id="searchNameInput" type="text" class="p-1 border rounded-md flex-1"/>
            </div>


        <div class="flex flex-col">
            <label>Min Price</label>
            <input type="number" class="p-1 border rounded-md" placeholder="WIP..."/>
        </div>
        <div class="flex flex-col">
            <label>Max Price</label>
            <input type="number" class="p-1 border rounded-md" placeholder="WIP..."/>
        </div>

        <div class="flex flex-col">
            <div class="grow"></div>
            <div>
                <button id="clearFiltersButton" class="p-1 border rounded-md w-16">
                    <i class="bi bi-eraser-fill"></i>
                </button>
                <button id="searchButton" class="p-1 border rounded-md w-16">
                    <i class="bi bi-search"></i>
                </button>
                
            </div>
        </div>
    </search>
    
    <!-- <aside> side bar search filter </aside> -->
    <section id="productContainer" class="p-2 grow grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 ">

    </section>

    <section class="flex p-2 gap-1 border-t">
        <button id="prevPageBtn" class="p-1 border rounded-l-md hover:bg-gray-100">Prev</button>
        <button id="nextPageBtn" class="p-1 border rounded-r-md hover:bg-gray-100">Next</button>
        <section id="paginationPagesContainer" class="flex p-0.5 gap-1">
            <!-- PLACEHOLDER -->
            <button class="p-1 border rounded-sm hover:bg-gray-100 hover:scale-105 duration-100">1</button>
        </section>
        <input id="jumpToPageInput" type="number" class="p-1 rounded-l-md border w-14"/>
        <button class="p-1 rounded-r-md border">View</button>
    </section>
</body>
</html>


<script type="module">
// COMPONENTS
import { productCard } from "../../js/components/productCard.js";
import { topNavBar } from "../../js/components/topNavBar.js";

// API
import { testFetchProducts } from '../../js/api/testFetchProducts.js'


// HTML ELEMENTS
const navContainer = document.getElementById('navContainer');

const searchNameInput = document.getElementById('searchNameInput');
const searchButton = document.getElementById('searchButton');
const productContainer = document.getElementById('productContainer');

const prevPageBtn = document.getElementById('prevPageBtn');
const nextPageBtn = document.getElementById('nextPageBtn');
const paginationPagesContainer = document.getElementById('paginationPagesContainer');
const jumpToPageInput = document.getElementById('jumpToPageInput');

// STATES/DATA
let productDataList = [];
let totalPages = 1;
let currentPage = 1;
let getProductApiMessage = '';

// EVENT LISTENERS
searchButton.onclick = loadProducts;
nextPageBtn.onclick = nextPage;
prevPageBtn.onclick = prevPage;
jumpToPageInput.onkeypress = (event) => {
    if (event.key === 'Enter') {
        jumpToPage(parseInt(jumpToPageInput.value));
    }
};

// Make accessible globally for onclick handlers
window.jumpToPage = jumpToPage;


navContainer.innerHTML = topNavBar(1);

function displayData()
{
    let cardsWithData = ''; 
    for (let i of productDataList)
    {
        cardsWithData += productCard(i.id, i.name, i.categories, i.price);
    }
    productContainer.innerHTML = cardsWithData;
}

function nextPage()
{
    if (currentPage === totalPages) return;
    else currentPage++;
    loadProducts();
}
function prevPage()
{
    if (currentPage === 0) return;
    else currentPage--;
    loadProducts();
    
}

// Make this async and await the fetch
async function loadProducts() {
    const response = await testFetchProducts(searchNameInput.value, currentPage);
    productDataList = response.productData;
    totalPages = response.totalPages;
    getProductApiMessage = response.message;
    displayData();
    loadPageBtns(); 
}

function jumpToPage(pageNumber){
    currentPage = pageNumber;
    loadProducts();
    jumpToPageInput.value = '';
}


function loadPageBtns()
{
    let btns = '';
    for (let i = 0; i < totalPages; i++)
    {
        if (currentPage === i+1) btns += pageBtn(i+1, true);
        else btns += pageBtn(i+1, false);
    }
    paginationPagesContainer.innerHTML = btns;
}

function pageBtn(pageNumber, highlighted) 
{
    let btnClass = '';
    const nonHighlightedClass = 'bg-white text-black hover:bg-gray-100';
    const highlightedClass = 'bg-black text-white font-bold';

    if (highlighted === true) btnClass = highlightedClass;
    else btnClass = nonHighlightedClass;

    const btn = 
    `
        <button onclick="jumpToPage(${pageNumber})" class="${btnClass} p-1 border rounded-sm hover:scale-105 duration-100 cursor-pointer">
            ${pageNumber}
        </button>
    `;
    return btn;
}

loadProducts(); 

</script>

