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
    <search class="p-2 border-b">
        <div class="flex gap-1">
            <input type="text" class="p-1 border rounded-md flex-1"/>
            <button class="p-1 border rounded-md">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </search>
    <nav id class="flex justify-evenly gap-2 border-b p-1.5">
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
    
    <!-- <aside> side bar search filter </aside> -->
    <section id="productContainer" class="p-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ">

    </section>
</body>
</html>


<script>
const productContainer = document.getElementById('productContainer');

// sample data
let productDataList = 
[
    { 
        id: 1, 
        name: 'acer nitro 15', 
        categories: ['laptop', 'electronics'] 
    }, 
    {
        id: 2, 
        name: 'poco x3 pro', 
        categories: ['phone', 'electronics', '2025', 'type-c'] }, 
    { 
        id: 3, 
        name: 'atomic habits', 
        categories: ['book', 'self-improvement'] 
    }
];

function displayData()
{
    let cardsWithData = ''; 
    for (let i of productDataList)
    {
        cardsWithData += productCard(i.id, i.name, i.categories);
    }
    productContainer.innerHTML = cardsWithData;
}


function productCard(id, name, categories)
{

    categoryCards = '';

    for (let i of categories)
    {
        categoryCards += 
        `
            <span class="p-1 rounded-md bg-blue-100 grow flex justify-center">
                ${i}
            </span>
        `;
    }

    card = 
    `
    <article class="flex justify-center">
        <article class="bg-white p-2 border rounded-md flex flex-col gap-1 min-w-64">
            <img class="h-54 bg-gray-300" alt="png"/>
            <label class="text-xl font-bold">${name}</label>
            <label>ID: ${id}</label>
            
            <div class="flex gap-1 flex-wrap">
                ${categoryCards}
            </div>
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

function testFetchProducts()
{
    fetch("../../php/getProducts.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        
    })
    .then(res => res.json())
    .then(data => {
        productDataList = data;
    });
}



function fetchProducts(page = 1)
{
    currentPage = page;

    let search = document.getElementById("search").value;
    let category = document.getElementById("category").value;

    fetch("search.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: JSON.stringify({ username: "example" })
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("results").innerHTML = data.html;
        document.getElementById("pagination").innerHTML = data.pagination;
    });
}

testFetchProducts();
displayData();

</script>



<style type="">


</style>