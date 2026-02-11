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
<body class="bg-white">
    
    <nav id="navContainer" class="flex justify-evenly gap-2 border-b p-1.5 bg-white">
        <!-- import { topNavBar } from "../../js/components/topNavBar.js"; -->
    </nav>
    <search class="p-2 border-b">
        <div class="flex gap-1">
            <input type="text" class="p-1 border rounded-md flex-1"/>
            <button class="p-1 border rounded-md">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </search>
    
    <!-- <aside> side bar search filter </aside> -->
    <section id="productContainer" class="p-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ">

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


const navContainer = document.getElementById('navContainer');
const productContainer = document.getElementById('productContainer');

navContainer.innerHTML = topNavBar(1);

let productDataList = [];

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
    productDataList = await testFetchProducts();
    displayData();
}

loadProducts(); // Call the async function
</script>



<style>


</style>