<?php
require('database.php'); // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['document']['name']);
    $fileName = $_FILES['document']['name'];
    $filePath = $uploadFile;

    if (move_uploaded_file($_FILES['document']['tmp_name'], $uploadFile)) {
        $sql = "INSERT INTO product_purchases (product_name, product_price, file_name, file_path) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdsd", $productName, $productPrice, $fileName, $filePath);
        
        if ($stmt->execute()) {
            echo "File successfully uploaded and data inserted into database.";
        } else {
            echo "Error inserting data into database: " . $stmt->error;
        }
    } else {
        echo "Possible file upload attack!";
    }
} else {
    echo "Invalid request method.";
}
?>
