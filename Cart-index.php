<?php
require('./backend/session.php');
?>

<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" href="stylesheets/Cart.css" type="text/css">
            <title>Jedgees</title>
        </head>
        <body>
            <div class="uppergrey"></div>
            <section class="Navigation"><!--Navigation-->
                    <div class="logo-nav">
                        <img src="Cart assets/LOGO.png" id="logo"><!--logo-->
                        <div class="Nav"><!--Navigation-->
                            <button id="home-redirect"><b>Home</b></s></button>
                            <button id="products-redirect"><b>Products</b></button>
                            <button id="customs-redirect"><b>Customs</b></b>
                    </div>
                    </div>
                    
                    <div class="user-cart"> <!--user and cart*-->
                        
                        <div>
                            <a href="Userpage Index.php">
                                <img src="Cart assets/Userpf.png">
                                <p>User</p>
                            </a>
                        </div>
                        
                        
                        <div>
                            <a href="Cart-index.php">
                                <img src="Cart assets/Cart.png">
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
            <div class="background"><img src="Cart assets/LOGO.png" alt=""></div>
            <div class="checkout">
                <div class="checkoutcontainer">
                <p id="Sub">Subtotal: </p>
                <p id="total">&#8369; 0.00</p>
                <button><b>CHECK OUT </b></button>
                </div>
            </div>
            <div class="Cartlist">
               
                <!--<div class="cartcontainer">
                    <div id="cartimage"><img src="backend/produc images/" alt=""></div>
                    <div class="prodinfo">
                        <h3>${}</h3>
                        <br>
                        <br>
                        <br>
                        <p>&#8369;${}</p>
                    </div>
                    <div>
                        <button onclick="" id="close">x</button>
                    </div>
                </div>-->

            </div>
            <script src="scripts/cart.js"></script>
        </body>
        <footer><!--footer-->
            <div class="footer-container">
                 <img id="logo-footer" src="Cart assets/LOGO.png">
                 <p class="contact">CONTACT US: </p>            
                     <div class="phone">
                         <img src="Cart assets/phone.png" id="phone">
                         <p>Telephone: 794-27-67</p>
                     </div>
                     <div class="message">
                        <img src="Cart assets/message.png" id="message">
                        <p>jedgees18digitalprinting@gmail.com</p>
                    </div>
                     <div class="coins">
                         <img src="Cart assets/coins.png" id="coins">
                         <p>Service Pricing</p>
                     </div>
                    <div class="human">
                        <img src="Cart assets/human.png" id="human">
                        <p>About Jedgees</p>
                    </div>
                     <div class="handshake">
                         <img src="Cart assets/handshake.png" id="handshake">
                         <p>Service Offered</p>
                     </div>
             </div>

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
        </footer>
        

</html>