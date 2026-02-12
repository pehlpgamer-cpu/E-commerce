export async function testFetchProducts(searchName)
{
    console.log('searched name: ' + searchName);
    try {
        const res = await fetch("http://localhost/E-commerce/php/getProducts.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: new URLSearchParams({ searchName: searchName})
            //body: JSON.stringify({ searchName: searchName})
        });
        const data = await res.json();
        console.table(data);
        return data;
    } catch (error) {
        console.error("Error fetching products:", error);
        return []; // Return empty array on error
    }
}