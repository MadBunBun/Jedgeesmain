<img?php

require('./backend/session.php');

?>

<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" href="stylesheets/homepage-session.css" type="text/css">
            <link rel="icon" href="Homepage assets/LOGO.png" type="image/png">
            <title>Jedgees</title>
        </head>
        <body>
            <div class="uppergrey"></div>
            <section class="Navigation"><!--Navigation-->
                    <div class="logo-nav">
                        <img src="Homepage assets/LOGO.png" id="logo"><!--logo-->
                        <div class="Nav"><!--Navigation-->
                                <button class="ol nav-button">Home</button>
                                <button class="ol nav-button">Products</button>
                                <button class="ol nav-button">Customs</button>
                        </div>
                    </div>
                    
                    <div class="user-cart"> <!--user and cart*-->
                        <div>
                            <a href="">
                                <img src="Homepage assets/Userpf.png">
                                <p>Admin</p>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="Homepage assets/Cart.png">
                                <p>Cart</p>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="Homepage assets/product.png">
                                <p>Status</p>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="Homepage assets/Pay.png">
                                <p>Sales</p>
                            </a>
                        </div>
                        <div>
                            <button class="edit" onclick="">
                                <img src="Homepage assets/edit.png">
                            </button>
                        </div>
                    </div>
            </section>
            <div class="lower-grey"><p>You need it. We print it. You love it. </p>
            </div> 

            <style>
                .edit-img {
                    width: 23px;
                }
            </style>
            <section class="banner"><!--banner-->
                <div class="bannertext-wrapper">
                    <h2>
                    <b>Feeling Professional? We print that.</b>
                    <a id="edit-banner-h2" href="" title="edit icons"><img class="edit-img" src="Homepage assets/edit.png"> </img></a>
                    </h2>
                    <p>
                        Create cards and more that looks as good as you feel about your business. 
                        Choose from hundreds of designs, materials and finishes 
                    </p>
                </div>
            </section>
            <section class="lower-text">
                <h2>JedgeesPrint Picks: Popular and Unbeatable.
                </h2>
            </section>
            <style>

                .bannertext-wrapper {
                    padding-left: 3%;
                }

                .lower-text h2 {
                    margin: 0px 0% 0 5.5%;
                }

                .product-wrapper {
                    padding-left: 4.5%;
                }

                </style>
                <section class="products-login">
                 <div class="product-wrapper"><!--products-->
                    <div class="prod">
                        <img src="Homepage assets/homepage-Product1.jpg" id="prod-img">
                        <div class="item-desc">
                            <p>
                                Rushed Posters
                                <br>₱90
                            </p>
                            <div></div><button type="button"><img src="Homepage assets/arrowbtn.png" id="product-arrow"></button>
                        </div>
                    </div>   
                    <div class="prod">
                        <img src="Homepage assets/homepage-Product2.jpg" id="prod-img">
                        <div class="item-desc">
                            <p>
                                Standing Tarpaulin
                                <br>₱200
                            </p>
                            <div></div><button type="button"><img src="Homepage assets/arrowbtn.png" id="product-arrow"></button>
                        </div>
                    </div>
                    <div class="prod">
                        <img src="Homepage assets/homepage-Product3.jpg" id="prod-img">
                        <div class="item-desc">
                            <p>
                                Research Manuscripts
                                <br>₱100-200
                            </p>
                            <div></div><button type="button"><img src="Homepage assets/arrowbtn.png" id="product-arrow"></button>
                        </div>
                    </div>
                    <div class="prod">
                        <img src="Homepage assets/homepage-Product4.jpg" id="prod-img">
                        <div class="item-desc">
                            <p>
                                Posters
                                <br>₱200
                            </p>
                            <div></div><button type="button"><img src="Homepage assets/arrowbtn.png" id="product-arrow"></button>
                        </div>
                    </div>
                    
                </div>
                <div class="background-logo">
                <img src="Homepage assets/LOGO.png" id="backgroundlogo">
                </div>
                
            </section>



                <script>
                document.getElementById("customs-redirect").addEventListener("click", function() {
                    window.location.href = "./Customize-index.php";
                });
                document.getElementById("home-redirect").addEventListener("click", function() {
                    window.location.href = "./Homepage-Index.php";
                });
                document.getElementById("products-redirect").addEventListener("click", function() {
                    window.location.href = "./Products-Index.php";
                });
                </script>
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
</html>