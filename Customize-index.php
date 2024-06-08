<?php

require('./backend/session.php');
require('./backend/database.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/customize.css" type="text/css">
        <title>Jedgees</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="scripts/customize-print.js"></script>
        <script src="scripts/customize-taurp.js"></script>
<<<<<<< Updated upstream
        <script src="scripts/customize-tshirt.js"></script>
=======
        <script src="scripts/customize-shirt.js"></script>
>>>>>>> Stashed changes

        
    </head>
    <body>
        <div class="uppergrey"></div>
            <section class="Navigation"><!--Navigation-->
                    <div class="logo-nav">
                        <img src="Customize assests/LOGO.png" id="logo"><!--logo-->
                        <div class="Nav"><!--Navigation-->
                                <button id="home-redirect"><b>Home</b></s></button>
                                <button id="products-redirect"><b>Products</b></button>
                                <button id="customs-redirect"><b>Customs</b></b>
                        </div>
                    </div>
                    
                    <div class="user-cart"> <!--user and cart*-->
                        <div>
                            <a href="Userpage Index.html">
                                <img src="Customize assests/Userpf.png">
                                <p>User</p>
                            </a>
                        </div>
                        <div>
                            <a href="Customize-index.php">
                                <img src="Customize assests/Cart.png">
                                <p>Cart</p>
                            </a>
                        </div>
                    </div>
            </section>
            <div class="lower-grey"><p>You need it. We print it. You love it.</p></div>
            <div id="backgroundlogo">
                <img src="Customize assests/LOGO.png" alt="logo">
            </div>
            <section class="container">
                        <div class="paperprints">
                            <h1>Paper Prints Customization</h1>
                        <form class="forms" method="POST" action="backend/customize-print.php" enctype="multipart/form-data" id="form-print">
                            <div class="form-left">
                                    <div>
                                    <label for="papertype">Type of paper:</label><br><br>
                                    <select name="papertype" id="papertype" required>
                                        <option value="Bond Paper">Bond Paper</option>
                                        <option value="Copy Paper">Copy Paper</option>
                                        <option value="Vellum Paper">Vellum Paper</option>
                                        <option value="Photo Paper">Photo Paper</option>
                                        <option value="Matte Paper">Matte Paper</option>
                                    </select><br><br>
                                    <label for="colors" required>Type of print:</label><br><br>
                                    <select name="typecolor" id="typecolor">
                                        <option value="Colored">Colored</option>
                                        <option value="B&W">B&W</option>
                                    </select>
                                    <br><br>
                                    <label for="size">Size of print:</label><br><br>
                                    <select name="size" id="printsize" required>
                                        <option value="A4">A4 size</option>
                                        <option value="Short">Short Size</option>
                                        <option value="Long">Long Size</option>
                                    </select>
                                    <br><br>
                                    <label for="numpages">Number of pages:</label><br><br>
                                    <input class="textinputs" type="number" name="numpage" id="pages" required>
                                    <br><br>
                                    
                                    
                                    
                                </div>
                                <div>
                                    <label for="docu" required>Upload your document:</label><br><br>
                                    <input type="file" id="docu" name="file" required><br><br>
                                    <label for="bind">Type of bind:</label><br><br>
                                    <input type="radio" class="binding" id="bind1" name="bind" value="Small Ring Bind"><label for="smallringbind">Small Ring Bind</label><br><br>
                                    <input type="radio" class="binding" id="bind2" name="bind" value="Big Ring Bind"><label for="bigringbind">Big Ring Bind</label><br><br>
                                    <input type="radio" class="binding" id="bind3" name="bind" value="Book Bind"><label for="bookbind">Book bind</label><br><br>
                                    <input type="radio" class="binding" id="bind4" name="bind" value="None" required><label for="none">None</label><br><br>
                                   <br><br>
                                </div>
                                <div>
                                    <label for="instructions" id="instructions">Special instructions:</label><br><br>
                                    <textarea class="textfields" name="instructions" id="instructions" rows="13" cols="50" placeholder="Write down your special instructions" value="None"></textarea>
                                </div>

                              <div class="total" id="resibo" style="display: none;">
                                    <h1>Confirm Order: </h1>
                                    <hr>
                                    <div class="total-info-container">
                                        <div class="total-info">
                                            <p><b>Type of Paper: </b><span id="paper"></span></p>
                                            <p><b>Type of Print: </b><span id="color"></span></p>
                                            <p><b>Size: </b><span id="size"></span></p>
                                            <p><b>Number of Pages: </b><span id="numpage"></span></p>
                                            <p><b>Type of Bind: </b><span id="binding"></span></p>
                                       
                                        </div>
                                        <div class="total-prices">
                                            <p class="total-dash">-</p>
                                            <p class="total-dash">-</p>
                                            <p class="total-dash">-</p>
                                            <p id="pagesprice"></p>
                                            <p class="total-dash" id="bindprice"></p>
                                            <p>
                                        </div>


                                    </div>
                                    <hr>
                                    <div class="subtotal-container">
                                        <h3>Total: </h3>
                                        <p id="totalprice"></p>
                                    </div>
                            </div>
                              <input type="hidden" name="bindprice" id="bindpricehidden" value="">
                                <input type="hidden" name="totalpages" id="totalpages" value="">
                                <input type="hidden" name="total" id="total" value="">

                                
                                    
                                </div>
                            <div class="sidepanel">
                                <button type="reset" name="reset" id="reset-print"><img src="Customize assests/Reset.png"><br><p>Reset</p></button><br>
                                <button style="display: block;" type="button" id="checkprice"><img src="Customize assests/Pay.png"><br><p>Check Price</p></button>
                                <button style="display: block;" type="submit" name="submit_print" id="submit"><img src="Customize assests/Pay.png"><br><p>Pay</p></button>
                            </div>
                         </form>
                        </div>
            </section>

            <section class="container">
                <div class="Tarpaulins">
                    <h1>Tarpaulin Customization</h1>
                <form class="forms" id="form-taurp" method="POST" action="backend/customize-print.php" enctype="multipart/form-data">
                    <div class="form-left" id="taurp-form-left">
                            <div>

                            <label for="papersize">Size of Tarpaulin:</label><br><br>
                            <input type="number" id="size-ft1" name="size-ft1" class="textinputs taurp-size" min="2" max="9" required>
                            <input type="number" id="size-ft2" name="size-ft2" class="textinputs taurp-size" min="" max="" required>
                            <br><br>
                            <label for="numpages">Number of Copies:</label><br><br>
                            <input type="number" name="numcopies_taurp" class="textinputs" id="numcopies_taurp" required>
                            
                            <br><br>
                            <label for="docu">Upload your document:</label><br><br>
                            <input type="file" id="docu" name="file-taurp" required><br><br>
                            <label for="bind">With our layout?:</label><br><br>
                            <input type="radio" id="bind" name="edit" value="Yes"><label for="Yes">Yes</label><br><br>
                            <input type="radio" id="bind" name="edit" value="No" required><label for="No">No</label>
                            
                        </div>
                        <!-- <div>
                            Input here if needed
                            
                        </div> -->
                        <div>
                            <label for="instructions" id="instructions">Special instructions:</label><br><br>
                            <textarea class="textfields" name="instructions-taurp" id="textfields" rows="13" cols="50">Write down your special instructions</textarea>
                        </div>

                        <div class="total" id="resibo-taurp" style="display: none;">
                                    <h1>Confirm Order: </h1>
                                    <hr>
                                    <div class="size-taurp-price">
                                        <p><b>Size of Taurpalin: </b><span id="size-taurp"></span></p>
                                        <p class="total-dash" id="size-taurp-price"></p>
                                    </div>
                                    <hr>
                                    <div class="total-info-container">
                                        <div class="total-info">
                                            
                                            <p><b>Number of Copies: </b><span id="num-taurp"></span></p>
                                            <p><b>With our layout?: </b><span id="layout"></span></p>
                                            <p style="display: none;" id="layout-price-display"><b>Layout Price: </b></p>

                                        </div>
                                        <div class="total-prices">
                                            <b><p class="total-dash" id="num-taurp-price"></p></b>
                                            <b><p class="total-dash" id="with-layout-dash"></p></b> 
                                            <b><p class="total-dash" id="layout-price"></p></b>
                                            
                                        </div>


                                    </div>
                                    <hr>
                                    
                                    <div class="subtotal-container">
                                        <h3>Total: </h3>
                                        <b><p id="totalprice-taurp"></p></b>
                                    </div>
                                    
                                </div>
                    </div>

                    <input type="hidden" name="taurp-price" id="taurp-price">
                    <input type="hidden" name="copies-price" id="copies-price">
                    <input type="hidden" name="layout-price" id="layout-price-value">
                    <input type="hidden" name="total-price" id="total-price-shirt">
                    
                    <div class="sidepanel">
                        <button type="reset" name="reset" id="reset-taurp"><img src="Customize assests/Reset.png"><br><p>Reset</p></button><br>
                        <button style="display: block;" type="button" id="checkprice_taurp"><img src="Customize assests/Pay.png"><br><p>Check Price</p></button>
                        <button style="display: block;" type="submit" name="submit_taurp" id="submit-taurp"><img src="Customize assests/Pay.png"><br><p>Pay</p></button>
                    </div>
                 </form>
                </div>
            </section>

            <section class="container">
                <div class="Posters">
                    <h1>Shirt Customization</h1>
                <form class="forms" id="form-shirt" method="POST" action="backend/customize-print.php" enctype="multipart/form-data">
                    <div class="form-left">
                            <div>
                            <label for="numShirts">Number of Shirts:</label><br><br>
                            <input type="number" name="numShirt" class="textinputs" id="numShirt">
                            <br><br>
                            <label for="papertype">Size of Print:</label><br><br>
<<<<<<< Updated upstream
                            <select name="print-size_shirt" id="print-size_shirt" class="print-size_shirt">
=======
                            <select name="print-size_shirt" id="dropdowns" class="print-size_shirt">
>>>>>>> Stashed changes
                                <option value="8x11">8x11</option>
                                <option value="4x7">4x7</option>
                                <option value="2x5">2x5</option>
                            </select><br><br>
                            <label for="papertype">Size of Shirt:</label><br><br>
<<<<<<< Updated upstream
                            <select name="shirt_size" id="shirt_size" class="shirt_size">
=======
                            <select name="shirt_size" id="dropdowns" class="shirt_size">
>>>>>>> Stashed changes
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select><br><br>
                            <label for="shirtmaterial">Type of Material:</label><br><br>
<<<<<<< Updated upstream
                            <select name="shirt_material" id="shirt_material" class="shirt_material">
                                <option value="Soft Cotton">Soft Poli-Cotton Shirt</option>
                                <option value="Prem Cotton">Premium Cotton Shirt</option>
=======
                            <select name="shirt_material" id="dropdowns" class="shirt_material">
                                <option value="softcotton">Soft Poli-Cotton Shirt</option>
                                <option value="premcotton">Premium Cotton Shirt</option>
>>>>>>> Stashed changes
                            </select><br><br>
                        </div>
                        <div>
                            <label for="docu">Upload your Design:</label><br><br>
                            <input type="file" id="docu" name="file-shirt"><br><br>
                            <label for="print type">Type of print:</label><br>
<<<<<<< Updated upstream
                            <select name="typevinyl" id="typevinyl" class="typevinyl">
                                <option value="Holo">Holographic</option>
                                <option value="Metal">Metallic</option>
                                <option value="Glitter">Glitterized</option>
                                <option value="Glow">Glow in the dark</option>
                                <option value="Gamuza">Gamuza</option>
=======
                            <select name="typevinyl" id="dropdowns" class="typevinyl">
                                <option value="holo">Holographic</option>
                                <option value="metal">Metallic</option>
                                <option value="glitter">Glitterized</option>
                                <option value="glow">Glow in the dark</option>
                                <option value="gamuza">Gamuza</option>
>>>>>>> Stashed changes
                            </select><br><br>
                        </div>
                        <div>
                            <label for="instructions" id="instructions">Special instructions:</label><br><br>
                            <textarea name="instructions-tshirt" id="textfields" rows="13" cols="50">Write down your special instructions</textarea>
                        </div>
                    </div>
                    <div class="total" id="resibo-shirt" style="display: none;">
                                    <h1>Confirm Order: </h1>
                                    <hr>
                                    <div class="size-shirt-price">
                                        <p><b>Shirt Size: </b><span id="size-shirt"></span></p>
                                        <p><b>Print Size: </b><span id="size-shirt-print"></span></p>
                                        
                                        <p class="total-dash" id="size-shirt-price"></p>
                                    </div>
                                    <hr>
                                    <div class="total-info-container">
                                        <div class="total-info">
                                            
                                            <p><b>Type of material: </b><span id="material-shirt"></span></p>
                                            <p style="display: none;" id="material-price-display"><b>Material Price: </b></p>
                                            <p><b>Print type: </b><span id="Printvinyl"></span></p>
                                            <p style="display: none;" id="vinyl-price-display"><b>Print type Price: </b></p>
                                            <p><b>Number of Shirts: </b><span id="num-shirt"></span></p>
                                        </div>
                                        <div class="total-prices">
                                            <b><p class="total-dash" id="layout-price"></p></b>
                                            
                                        </div>


                                    </div>
                                    <hr>
                                    
                                    <div class="subtotal-container">
                                        <h3>Total: </h3>
                                        <b><p id="totalprice-shirt"></p></b>
                                    </div>
                                    
                        </div>
                         <input type="hidden" name="shirt_price" id="shirt_price">
                            <input type="hidden" name="vinyl_price" id="vinyl_price">
                            <input type="hidden" name="print_sizeprice" id="print_sizeprice">
                            <input type="hidden" name="total_price" id="total_price">
                            <div class="sidepanel">
                                <button type="reset" name="reset" id="reset-shirt"><img src="Customize assests/Reset.png"><br><p>Reset</p></button><br>
                                <button style="display: block;" type="button" id="checkprice_shirt"><img src="Customize assests/Pay.png"><br><p>Check Price</p></button>
                                <button style="display: block;" type="submit" name="submit_shirt" id="submit-shirt"><img src="Customize assests/Pay.png"><br><p>Pay</p></button>
                            </div>
                    </div>
                   
                </form>
            </div>
            </section>

            

            

            



    </body>
    <footer><!--footer-->
        <div class="footer-container">
             <img id="logo-footer" src="Customize assests/LOGO.png
             ">
             <p class="contact">CONTACT US: </p>            
                 <div class="phone">
                     <img src="Customize assests/phone.png" id="phone">
                     <p>Telephone: 794-27-67</p>
                 </div>
                 <div class="message">
                    <img src="Customize assests/message.png" id="message">
                    <p>jedgees18digitalprinting@gmail.com</p>
                </div>
                 <div class="coins">
                     <img src="Customize assests/coins.png" id="coins">
                     <p>Service Pricing</p>
                 </div>
                <div class="human">
                    <img src="Customize assests/human.png" id="human">
                    <p>About Jedgees</p>
                </div>
                 <div class="handshake">
                     <img src="Customize assests/handshake.png" id="handshake">
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
                    window.location.href = "./Products-index.html";
                });
         </script>

             


                                    
    </footer>
    
</html>