<?php
header("Content-Type: application/json");

$searchName = $_POST['searchName'] ?? '';
$page = $_POST['page'] ?? 1;

$data = [];

require  '../php/database.php'; // causes an error

$limit = 20;
$offset = ($page - 1) * $limit;

$test = 'red';

$sql = '';

if (trim($searchName) === '') $sql = "SELECT * FROM products_tbl LIMIT $limit";
else {
    $sql = "SELECT * FROM products_tbl WHERE name LIKE '%$searchName%' LIMIT $limit";
}


// Execute the SQL query
$result = $conn->query($sql);

// Process the result set
if ($result->num_rows > 0) {
  // Output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = ['id' => $row["product_id"], 'name' => $row["name"], 'price' => $row["price"]];
    }
} 
else {
    echo "0 results";
}


echo json_encode($data);



