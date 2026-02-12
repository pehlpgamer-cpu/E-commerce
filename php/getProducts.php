<?php
require  '../php/database.php';

header("Content-Type: application/json");

$searchName = $_POST['searchName'] ?? '';
$searchPage = $_POST['searchPage'] ?? 1;

// JSON RESPONSE ----------------------------------------------------------------------------------------------------------------------------------------------------
$data = [];
$totalPages = 1;
$message = '';

// STATES ----------------------------------------------------------------------------------------------------------------------------------------------------
$limit = 20;
$offset = ($searchPage - 1) * $limit; 
$getProductSql = '';
$getTotalProductPagesSql = '';


// product Data ----------------------------------------------------------------------------------------------------------------------------------------------------
if ($searchName === '') 
{
    $getProductSql = "SELECT * FROM products_tbl LIMIT $limit OFFSET $offset";
}
else 
{
    $getProductSql = "SELECT * FROM products_tbl WHERE name LIKE '%$searchName%' LIMIT $limit OFFSET $offset";
}
$productDataResult = $conn->query($getProductSql);

if ($productDataResult->num_rows > 0) {
    while($row = $productDataResult->fetch_assoc()) {
        $data[] = ['id' => $row["product_id"], 'name' => $row["name"], 'price' => $row["price"]];
    }
    $message = "201 - Ok";
} 
else $message = "0 results";

// total pages ----------------------------------------------------------------------------------------------------------------------------------------------------
if ($searchName === '') 
{
    $getTotalProductPagesSql = "SELECT COUNT(*) AS total_pages FROM products_tbl LIMIT $limit";
}
else
{
    $getTotalProductPagesSql = "SELECT COUNT(*) AS total_pages FROM products_tbl WHERE name LIKE '%$searchName%' LIMIT $limit";
}
$getTotalPagesResult = $conn->query($getTotalProductPagesSql);

if ($getTotalPagesResult->num_rows > 0) {
    while($row = $getTotalPagesResult->fetch_assoc()) {
        $totalPages = ceil($row["total_pages"] / 20);
    }
} 



echo json_encode([
    'productData' => $data,
    'totalPages' => $totalPages,
    'message' => $message
]);



