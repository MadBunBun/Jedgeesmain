<?php

require('./backend/session.php');

?>

<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" href="stylesheets/homepage.css" type="text/css">
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
            <div class="lower-grey"><p>You need it. We print it. You love it.</p></div>

            <section class="banner"><!--banner-->
                <div class="bannertext-wrapper">
                    <h2>
                    <b>Feeling Professional? We print that.</b>
                    </h2>
                    <p>
                        Create cards and more that looks as good as you feel about your business. 
                        Choose from hundreds of designs, materials and finishes
                    </p>
                </div>
            </section>
            <section class="lower-text">
                <h2>JedgeesPrint Picks: Popular and Unbeatable.</h2>
            </section>
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
                <div class="login-container"><!--login-->
                    <div class="login">
                        <form>
                        <div class="login-left">
                            <div><label>EMAIL:</label><br><input type="email" class="email" name="User_Email" ></div>
                            <div><label>PASSWORD:</label><br></b><input type="password" class="password" name="User_Password"></div>
                            <button type="submit" name="login"><b>LOGIN</b></button>
                        </div>
                        <div class="login-mid">
                            <div></div>
                            <h2>OR</h2>
                            <div></div>
                        </div>
                        <div class="login-right">
                        <a class="sn" href="Signup.php" style="text-decoration: none; color: white;"><div><p><b>SIGN UP</b></p></div></a>
                        <a class="sn" href="" style="text-decoration: none; color: white;"><div><p><b>FORGOT PASS</b></p></div></a>
                        </div>
                        </form>

                        <form method="POST" action="backend/logout.php">
                            <button name="logout">Logout</button>
                        </form>
                    </div>
                    
                    <img src="Homepage assets/LOGO.png" id="backgroundlogo">
                </div>
                
            </section>
            <div class="popuplogin">
                <div class="login">
                    <form>
                    <div class="login-left">
                        <div><label>EMAIL:</label><br><input type="email" class="email" name="User_Email" ></div>
                        <div><label>PASSWORD:</label><br></b><input type="password" class="password" name="User_Password"></div>
                        <button type="submit" name="login"><b>LOGIN</b></button>
                    </div>
                    <div class="login-mid">
                        <div></div>
                        <h2>OR</h2>
                        <div></div>
                    </div>
                    <div class="login-right">
                    <a class="sn" href="Signup.php" style="text-decoration: none; "><div><p><b>SIGN UP</b></p></div></a>
                        <a class="sn" style="text-decoration: none; color: white;"><div><p><b>FORGOT PASS</b></p></div></a>
                    </div>
                    </form>
                    <button type="button">X</button>
                </div>
            </div>
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