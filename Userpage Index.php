<?php
require('./backend/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="icon" href="Homepage assets/LOGO.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Interface</title>
    <link rel="stylesheet" href="stylesheets/Userpage.css">
</head>
<body>
    <div class="uppergrey"></div>
    <section class="Navigation"><!--Navigation-->
            <div class="logo-nav">
                <img src="Userpage assets/LOGO.png" class="logo"><!--logo-->
                <div class="Nav"><!--Navigation-->
                    <button id="home-redirect"><b>Home</b></s></button>
                    <button id="products-redirect"><b>Products</b></button>
                    <button id="customs-redirect"><b>Customs</b></b>
            </div>
            </div>
            
            <div class="user-cart"> <!--user and cart*-->
                <div>
                    <a href="Userpage Index.php">
                        <img src="Userpage assets/Userpf.png">
                        <p>User</p>
                    </a>
                </div>
                <div>
                    <a href="Cart-index.php">
                        <img src="Userpage assets/Cart.png">
                        <p>Cart</p>
                    </a>
                </div>

                <form action="backend/logout.php" method="POST" class="Logout">
                            <button type="submit" name="logout">
                                <img src="Homepage assets/Logout.png" alt="">
                                <p>Logout</p>
                            </button>
                       </form>
            </div>
    </section>
    <div class="lower-grey"><p>You need it. We print it. You love it.</p></div>
    <section class="userinfo">
            <div class="userinfo-container">
                <div class="alluserinfo">
                    <div class="profile">
                        <img src="Userpage assets/Userpf.png" alt="user">
                    </div>
                    <div>
                        <p><b>First Name</b></p>
                        <p>Juan </p>
                        <br>
                        <p><b>Middle Name</b></p>
                        <p>D.</p>
                        <br>
                        <p><b>Last Name</b></p>
                        <p>Dela Cruz</p>
                    </div>
                    <div>
                        <p><b>City</b></p>
                        <p>New York</p>
                        <br>
                        <p><b>Barangay</b></p>
                        <p>Cubao</p>
                        <br>
                        <p><b>Street/House no.</b></p>
                        <p>Dimagiba St. Lot 6969</p>
                    </div>
                    <div>
                        <p><b>Zip Code</b></p>
                        <p>8008</p>
                        <br>
                        <p><b>Contact Number</b></p>
                        <p>09**********</p>
                        <br>
                        <p><b>Email</b></p>
                        <p>sadadwada@gmail.com</p>
                    </div>
                </div>
                <div class="editbutton">
                    <button id="edit_userinfo">Edit User Information</button>
                </div>
            </div>
    </section>
    <section class="product_status">
        <div class="status-container">
            <div class="status-title"><h2>Product Status</h2></div>
        </div>
    </section>
    <div class="backgroundlogo"><img src="Userpage assets/LOGO.png" alt="logo"></div>
</body>
<footer><!--footer-->
    <div class="footer-container">
         <img id="logo-footer" src="Homepage assets/LOGO.png">
         <p class="contact">CONTACT US: </p>            
             <div class="phone">
                 <img src="Homepage assets/phone.png" id="phone">
                 <p>Telephone: 794-27-67</p>
             </div>
             <div class="message">
                <img src="Homepage assets/message.png" id="message">
                <p>jedgees18digitalprinting@gmail.com</p>
            </div>
             <div class="coins">
                 <img src="Homepage assets/coins.png" id="coins">
                 <p>Service Pricing</p>
             </div>
            <div class="human">
                <img src="Homepage assets/human.png" id="human">
                <p>About Jedgees</p>
            </div>
             <div class="handshake">
                 <img src="Homepage assets/handshake.png" id="handshake">
                 <p>Service Offered</p>
             </div>
     </div>
</footer>
<script>
    document.getElementById("customs-redirect").addEventListener("click", function() {
            window.location.href = "./Customize-index.php";
        });

        document.getElementById("home-redirect").addEventListener("click", function() {
            window.location.href = "./Homepage-index.php";
        });
        document.getElementById("products-redirect").addEventListener("click", function() {
            window.location.href = "./Products-index.php";
        });
 </script>

</html>