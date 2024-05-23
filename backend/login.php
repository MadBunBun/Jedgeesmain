<?php
    require('./database.php');

    session_start();

    if (isset($_POST['login'])) {
        $username = $_POST['User_Email'];
        $password = $_POST['User_Password'];

        if (empty($username) || empty($password)) {
            echo "<script>alert('Please fill up all the fields')</script>";
    } else {
        $query = "SELECT * FROM user_credentials WHERE username='$username' AND password= md5('$password')";
        $sqlvalidate = mysqli_query($conn, $query);

        if (mysqli_num_rows($sqlvalidate) > 0) {
            $_SESSION['session'] = 'valid';
            

        } else {
            $_SESSION['session'] = 'invalid';
            // echo 'Invalid Credentials';
            echo "<script>alert('Invalid Credentials!')</script>";
            
        }
    }
}
?>
