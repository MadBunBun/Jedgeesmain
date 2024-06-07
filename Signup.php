<?php
    require('./backend/database.php');
    
    session_start();

    // if ($_SESSION['session'] == 'invalid' || empty($_SESSION['session'])){
    //     $_SESSION['session'] = 'invalid';
    // }


    if (!isset($_SESSION['session'])) {
        $_SESSION['session'] = 'invalid';
    }

    if ($_SESSION['session'] == 'valid'){
        echo "<script>window.location.href = '/jedgeesmain/Homepage-Index.php';</script>";    
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
                <form  action="backend/Signup-index.php" method="POST">
                    <div>
                        <label for="email">Email Address:</label><br>
                        <input type="text" id="email" name="email" placeholder="example@gmail.com"required>
                    </div>
                    <div>
                        <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div>
                        <label for="confirmPassword">Confirm Password:</label><br>
                        <input type="password" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <div>
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" placeholder="Surname, First Name" required>
                    </div>
                    <div>
                        <label for="phoneNumber">Phone Number:</label><br>
                        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="09999999999" required>
                    </div>
                    <div>
                        <label for="address">Address:</label><br>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <button type="submit" class="Signup">SIGN UP</button>
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