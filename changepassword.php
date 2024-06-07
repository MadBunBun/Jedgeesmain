<?php
session_start();

if (empty($_SESSION['token'])) {
    header('Location: ./forgotpassword.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheets/changepassword.css" type="text/css">
    <link rel="icon" href="Homepage assets/LOGO.png" type="image/png">
    <title>Change Password</title>
</head>
<body>
    <div class="uppergrey"></div>
    <div class="signupwrapper">
        <div class="signupcontainer">
            <div class="title">
                <img src="Signup assets/human.png" alt="Human Icon">
                <h2>Change Password</h2>
            </div>
            <div class="forgotpassword">
                <form id="form" method="POST">
                    <label for="newPassword">New Password:</label><br>
                    <input type="password" id="newPassword" name="newPassword" required><br><br>
                    <label for="confirmPassword">Confirm New Password:</label><br>
                    <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
                    <button type="submit" name="changePassword">Change Password</button>
                </form>
            </div>

            <?php 
                if (isset($_POST['changePassword'])) {
                    $newPassword = $_POST['newPassword'];
                    $confirmPassword = $_POST['confirmPassword'];
                    if ($newPassword !== $confirmPassword) {
                        echo "<div class='notification-box error'>
                                <p>New Password and Confirm Password must match!</p>
                            </div>";

                    } else {
                        $query = "UPDATE user_credentials SET password = '$newPassword' WHERE username = md5('$email')";

                        $result = mysqli_query($conn, $query);

                        if ($result) {
                                if (mysqli_affected_rows($conn) > 0) {
                                    echo "<div class='notification-box'>
                                        <p>Success! Redirecting....</p>
                                    </div>
                                    ";
                                    $_SESSION['session'] = 'valid';
                                    unset($_SESSION['token']);
                                    header('Location: ./Homepage-Index.php');

                                } else {
                                    echo "<script>console.log('Username not found or password already matches.');</script>";
                                }
                            } else {
                                echo "Error updating password: " . mysqli_error($conn);
                            }
                    }   
                }

                    
            ?>



            
        </div>
    </div>

    <div class="background">
        <img src="Signup assets/LOGO.png" id="logo" alt="Logo">
    </div>

    <footer>
        <div class="footer-container">
            <img id="logo-footer" src="Homepage assets/LOGO.png" alt="Logo">
            <p class="contact">CONTACT US: </p>
            <div class="phone">
                <img src="Homepage assets/phone.png" id="phone" alt="Phone Icon">
                <p>Telephone: 794-27-67</p>
            </div>
            <div class="message">
                <img src="Homepage assets/message.png" id="message" alt="Message Icon">
                <p>jedgees18digitalprinting@gmail.com</p>
            </div>
            <div class="coins">
                <img src="Homepage assets/coins.png" id="coins" alt="Coins Icon">
                <p>Service Pricing</p>
            </div>
            <div class="human">
                <img src="Homepage assets/human.png" id="human" alt="Human Icon">
                <p>About Jedgees</p>
            </div>
            <div class="handshake">
                <img src="Homepage assets/handshake.png" id="handshake" alt="Handshake Icon">
                <p>Service Offered</p>
            </div>
        </div>
    </footer>


</body>
</html>
