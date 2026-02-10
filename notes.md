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


















// sample data
        { 
            id: 1, 
            name: 'acer nitro 15', 
            categories: ['laptop', 'electronics'] 
        }, 
        {
            id: 2, 
            name: 'poco x3 pro', 
            categories: ['phone', 'electronics', '2025', 'type-c'] 
        }, 
        { 
            id: 3, 
            name: 'atomic habits', 
            categories: ['book', 'self-improvement'] 
        }