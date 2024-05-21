<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'jedgees';

    $conn = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_error()) {
        echo "<script>alert('Error!');</script>";
    } else {
        echo "<script>console.log('Connected');</script>";
    }
?>