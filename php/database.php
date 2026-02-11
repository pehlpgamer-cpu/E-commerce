<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-test-commerce-midterm-project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("<h1 style='color: red'>Connection failed: " . $conn->connect_error . "</h1>");
}
//echo "<h1 style='color: lime'>Connected successfully</h1>";