
<?php
    require('./backend/forgot.php');
    session_start();
    if ($_SESSION['session'] === 'customer' || $_SESSION['session'] === 'admin') {
        header('Location: ./Homepage-Index.php');
        exit();
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/forgotpassword.css" type="text/css">
        <link rel="icon" href="Homepage assets/LOGO.png" type="image/png">
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
                    <form  method="POST">
                        <label for="email">Enter your account email:</label><br><br>
                        <input type="email" id="email-user" name="email" required><br><br>
                        <button type="submit" name="next">Next</button>
                    </form>
                    
                </div>

                <?php
                         
                    if (isset($_POST['next'])) {

                        $email = $_POST['email'];

                        $query = "SELECT * FROM user_credentials WHERE username = '$email'";
                        
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        

                        if (mysqli_num_rows($result) > 0) {
                            $name = $row['fname'];
                            session_start();
                            $token = generateToken();
                            $_SESSION['token'] = $token;
                            echo "<div class='notification-box' style='margin-bottom: 20%;'>
                                <p >A link has been sent to $email</p>
                                </div>";
                            send_pass_reset($name, $email);

                        }
                        else {
                            echo "<style>
                            .notification-box {
                                background-color: #f8d7da;
                                color: #721c24; 
                                border-color: #f5c6cb;
                            }
                          </style>
                          <div class='notification-box' style='margin-bottom: 20%;'>
                            <p>Email doesn't exist in our records</p>
                          </div>";

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