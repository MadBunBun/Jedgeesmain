<?php
session_start();

if ($_SESSION['session'] === 'valid') {
    header('Location: ./Homepage-Index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/signup.css" type="text/css">
        <title>Jedgees</title>
    </head>
    <body>
        <div class="uppergrey"></div>
        <div class="signupwrapper">
            <div class="signupcontainer">
                <div class="title">
                    <img src="Signup assets/human.png" alt="Human Icon">
                    <h2>Jedgees Sign Up</h2>
                </div>
                <form  action="backend/Signup.php" method="POST">
                <div>
                        <label for="email">Email Address:</label><br>
                        <input type="text" id="email" name="email">
                    </div>
                    <div>
                        <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password">
                    </div>
                    <div>
                        <label for="confirmPassword">Confirm Password:</label><br>
                        <input type="password" id="confirmPassword" name="confirmPassword">
                    </div>
                    <div>
                        <label for="name">First Name:</label><br>
                        <input type="text" id="fname" name="fname">
                    </div>
                    <div>
                        <label for="name">Last Name:</label><br>
                        <input type="text" id="lname" name="lname">
                    </div>
                    <div>
                        <label for="phoneNumber">Phone Number:</label><br>
                        <input type="tel" id="contactnum" name="contactnum">
                    </div>
                    <div>
                        <label for="address">Street Number:</label><br>
                        <input type="text" id="address" name="streetNum" placeholder="example: 8692">
                    </div>
                    <div>
                        <label for="address">Street Name:</label><br>
                        <input type="text" id="address" name="streetName" placeholder="example: Fortuna">
                    </div>
                    <div>
                        <label for="address">Barangay:</label><br>
                        <input type="text" id="address" name="barangay" placeholder="example: Olympia">
                    </div>
                    <div>
                        <label for="address">City:</label><br>
                        <input type="text" id="address" name="city" placeholder="example: Makati">
                    </div>
                    <div>
                        <label for="address">Postal Code:</label><br>
                        <input type="text" id="address" name="postal" placeholder="example: 1207">
                    </div>
                    <button type="submit" class="Signup" name="sign-up">SIGN UP</button>
                </form>
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