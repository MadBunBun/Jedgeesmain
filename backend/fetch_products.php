<?php
header('Content-Type: application/json');
require 'database.php';

$sql = "SELECT id, name, price, image FROM products";
$result = $conn->query($sql);

$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

echo json_encode($products, JSON_PRETTY_PRINT); 

?>