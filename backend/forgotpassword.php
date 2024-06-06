<?php
require('./backend/database.php');
function generateRandomCode($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Check if the email exists
    $sql = "SELECT * FROM users WHERE email = $email";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $code = generateRandomCode();
        // Here you would send the email with the code
        // For example, using an email sending service

        // For demonstration, we just display a message
        $message = 'A code is sent to your email. If not yet, click this <a href="#">link</a>';
    } else {
        $message = "Email doesn't exist";
    }
    if (isset($_GET['message'])) {
        echo '<div id="message">' . htmlspecialchars($_GET['message']) . '</div>';
    }
    $stmt->close();
    $conn->close();

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="forgotpassword.css" type="text/css">
    <title>Forgot Password</title>
</head>
<body>
    <div class="uppergrey"></div>
    <div class="signupwrapper">
        <div class="signupcontainer">
            <div class="title">
                <img src="Signup assets/human.png" alt="Human Icon">
                <h2>Forgot Password</h2>
            </div>
            <div class="forgotpassword">
                <form action="forgotpassword.php" method="POST">
                    <label for="email">Enter your account email:</label><br><br>
                    <input type="email" id="email" name="email" required><br><br>
                    <button type="submit">Next</button>
                </form>
            </div>
            <?php
            if ($message != '') {
                echo '<div id="message">' . htmlspecialchars($message) . '</div>';
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
