export async function testFetchProducts(searchName, searchPage)
{
    console.log('🔍searched name: ' + searchName);
    try 
    {
        const res = await fetch("http://localhost/E-commerce/php/getProducts.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: new URLSearchParams({ searchName: searchName, searchPage: searchPage})
        });
        const data = await res.json();
        console.table(data.productData);
        return data;
    } 
    catch (error) 
    {
        console.error("ERROR fetching products:", error);
        return []; // Return empty array on error
    }
}