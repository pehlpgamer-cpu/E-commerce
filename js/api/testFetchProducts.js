export async function testFetchProducts()
{
    try {
        const res = await fetch("http://localhost/E-commerce/php/getProducts.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            }
        });
        const data = await res.json();
        console.table(data);
        return data;
    } catch (error) {
        console.error("Error fetching products:", error);
        return []; // Return empty array on error
    }
}