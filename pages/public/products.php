<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Products</title>
</head>
<body class="bg-white">
    
    <nav id="navContainer" class="flex justify-evenly gap-2 border-b p-1.5">
        <a href="" class="bg-white p-1 flex gap-1 rounded-md hover:bg-gray-200">
            <i class="bi bi-house-fill"></i>
            <label>Home</label>
        </a>

        <a href="http://localhost/E-commerce/pages/public/products.php" class="bg-white p-1 flex gap-1 p-1 rounded-md hover:bg-gray-200">
            <i class="bi bi-bag-fill"></i>
            <label>Products</label>
        </a>

        <a href="http://localhost/E-commerce/pages/public/cart.php" class="bg-white p-1 flex gap-1 rounded-md hover:bg-gray-200">
            <i class="bi bi-cart4"></i>
            <label>Cart</label>
        </a>
            <label>
        <a href="http://localhost/E-commerce/pages/public/login.php" class="bg-white p-1 flex gap-1 rounded-md hover:bg-gray-200">
            <i class="bi bi-person-circle"></i>
            <label>Account</label>
        </a>
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
//import { BaseURL } from "../../js/configs.js";
import { topNavBar } from "../../js/components/topNavBar.js";



    const navContainer = document.getElementById('navContainer');
    const productContainer = document.getElementById('productContainer');

    navContainer.innerHTML = topNavBar();

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

    function productCard(id, name, categories, price = 0.00)
    {
        const card = 
        `
        <article class="flex justify-center">
            <article class="bg-white p-2 border rounded-md flex flex-col gap-1 min-w-64">
                <img class="h-54 bg-gray-300" alt="png"/>
                <label class="text-xl font-bold">${name}</label>
                <label>₱ ${price}</label>

                <div class="flex gap-1">
                    <button class="flex-1 p-1 rounded-md border hover:bg-gray-100 cursor-pointer">
                        <i class="bi bi-bag-fill cursor-pointer"></i>
                        <label class="cursor-pointer">Buy</label>
                    </button>
                    <button class="flex-1 p-1 rounded-md border hover:bg-gray-100">
                        <i class="bi bi-cart4"></i>
                        <label>Cart</label>
                    </button>
                </div>
            </article>
        </article>
        `;
        return card;
    }


    async function testFetchProducts()
    {
        try {
            const res = await fetch("http://localhost/E-commerce/php/getProducts.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            });
            const data = await res.json();
            productDataList = data;
            displayData();
        } catch (error) {
            console.error("Error fetching products:", error);
        }
    }

    testFetchProducts();
</script>



<style>


</style>