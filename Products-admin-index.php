<?php
    require 'database.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/Products.css" type="text/css">
        <title>Jedgees</title>
    </head>
    <body>
        <div class="uppergrey"></div>
            <section class="Navigation"><!--Navigation-->
                    <div class="logo-nav">
                        <img src="Product assets/LOGO.png" id="logo"><!--logo-->
                        <div class="Nav"><!--Navigation-->
                                <div><a href="Homepage-Index.php"><b>Home</b></a></div>
                                <div><a href="Products-index.html"><b>Products</b></a></div>
                                <div><a href="Customize-index.php"><b>Customs</b></a></div>
                        </div>
                    </div>
                    
                    <div class="user-cart"> <!--user and cart*-->
                        <div>
                            <a href="Userpage Index.html">
                                <img src="Product assets/Userpf.png">
                                <p>User</p>
                            </a>
                        </div>
                        <div>
                            <a href="Cart-index.html">
                                <img src="Product assets/Cart.png">
                                <p>Cart</p>
                            </a>
                        </div>
                    </div>
            </section>
            <div class="lower-grey"><p>You need it. We print it. You love it.</p></div>
            
            <div class="title"><h1> Jedgees Products</h1></div>

                
                     <div class="product_container_admin">
                        
                    </div>
                    <div class="additem">
                        <div class="prod-add">
                            <button type="button" class="add-item-button">Add an item</button>
                         </div> 
                    </div>
            
                
                <div class="popupadd">
                    <div class="addprod">
                        <form action="backend/productedit.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            <label for="name">Product Name:</label>
                            <input type="text" name="name" id="name" class="input" required><br><br>
                            
                            <label for="price">Product Price:</label>
                            <input type="number" step="0.01" name="price" id="price" class="input" required><br><br>
                            
                            <label for="image">Product Image:</label>
                            <input type="file" name="image" id="image" accept="image/*"><br><br>
                            
                            <input type="submit" value="Upload Product">
                            <button type="button" class="closebtn">x</button>
                        </form>
                    </div>
                </div>
               <div class="overlay" id="popuplogin"></div>
               
           
            
            
                
           


    <script src="scripts/product.js"></script>
    <script>
         document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.add-item-button').addEventListener('click', function() {
                document.querySelector('.popupadd').style.display = 'flex';
                document.querySelector('.overlay').style.display = 'block';
            });

            document.querySelector('.closebtn').addEventListener('click', function() {
                document.querySelector('.popupadd').style.display = 'none';
                document.querySelector('.overlay').style.display = 'none';
            });
        });
    </script>
    </body>
    <footer><!--footer-->
        <div class="footer-container">
             <img id="logo-footer" src="Product assets/LOGO.png">
             <p class="contact">CONTACT US: </p>            
                 <div class="phone">
                     <img src="Product assets/phone.png" id="phone">
                     <p>Telephone: 794-27-67</p>
                 </div>
                 <div class="message">
                    <img src="Product assets/message.png" id="message">
                    <p>jedgees18digitalprinting@gmail.com</p>
                </div>
                 <div class="coins">
                     <img src="Product assets/coins.png" id="coins">
                     <p>Service Pricing</p>
                 </div>
                <div class="human">
                    <img src="Product assets/human.png" id="human">
                    <p>About Jedgees</p>
                </div>
                 <div class="handshake">
                     <img src="Product assets/handshake.png" id="handshake">
                     <p>Service Offered</p>
                 </div>
         </div>
    </footer>
   
</html>