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
        <!-- import { topNavBar } from "../../js/components/topNavBar.js"; -->
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
        <button onclick="nextPage()" class="p-1 border rounded-l-md hover:bg-gray-100">Prev</button>
        <button onclick="prevPage()" class="p-1 border rounded-r-md hover:bg-gray-100">Next</button>
        <section id="paginationPagesContainer" class="flex p-1 gap-1">
            <!-- PLACEHOLDERS -->
            <button class="p-1 border rounded-md">1</button>
            <button class="p-1 border rounded-md">2</button>
            <button class="p-1 border rounded-md">3</button>
        </section>
    </section>
</body>
</html>


<script type="module">
// COMPONENTS
import { productCard } from "../../js/components/productCard.js";
import { topNavBar } from "../../js/components/topNavBar.js";

// API
import { testFetchProducts } from '../../js/api/testFetchProducts.js'

// UTILS
// n/a

// HTML ELEMENTS
const navContainer = document.getElementById('navContainer');
const productContainer = document.getElementById('productContainer');
const searchNameInput = document.getElementById('searchNameInput');
const searchButton = document.getElementById('searchButton');

navContainer.innerHTML = topNavBar(1);

let productDataList = [];


// Add event listener instead of using onclick (to make it work with <script type="module">)
searchButton.onclick = loadProducts;

function displayData()
{
    let cardsWithData = ''; 
    for (let i of productDataList)
    {
        cardsWithData += productCard(i.id, i.name, i.categories);
    }
    productContainer.innerHTML = cardsWithData;
}

// Make this async and await the fetch
async function loadProducts() {
    productDataList = await testFetchProducts(searchNameInput.value);
    displayData();
}

loadProducts(); 
</script>



<style>


</style>