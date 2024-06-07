<?php
    require('./database.php');

    if (isset($_POST['sign-up'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']); 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $contactnum = $_POST['phoneNumber'];
        $streetNumber = $_POST['streetNum'];
        $streetName = $_POST['streetName']; 
        $barangay = $_POST['barangay']; 
        $city = $_POST['city']; 
        $postalCode = $_POST['postal']; 

        $query = "INSERT INTO user_credentials (role, username, password, fname, lname, contactnum, streetNumber, streetName, barangay, city, postal) 
                VALUES ('student', '$email', '$password', '$fname', '$lname', '$contactnum', '$streetNumber', '$streetName', '$barangay', '$city', '$postalCode')";
        
        $result = mysqli_query($conn, $query);

        if ($result) {
            session_start();

            $id = mysqli_insert_id($conn);;
            $_SESSION['session'] = 'valid';
            $_SESSION['username'] = $email;
            $_SESSION['user_id'] = $id;
            
            header('Location: ../Homepage-Index.php');
        }
        else {
            echo "<script>console.log('Something Goes Wrong!')</script>";
        }
    }
?>
