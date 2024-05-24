<?php

require('./backend/session.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/customize.css" type="text/css">
        <title>Jedgees</title>

        
    </head>
    <body>
        <div class="uppergrey"></div>
            <section class="Navigation"><!--Navigation-->
                    <div class="logo-nav">
                        <img src="Customize assests/LOGO.png" id="logo"><!--logo-->
                        <div class="Nav"><!--Navigation-->
                                <button id="home-redirect"><b>Home</b></s></button>
                                <button><b>Products</b></button>
                                <button id="customs-redirect"><b>Customs</b></b>
                        </div>
                    </div>
                    
                    <div class="user-cart"> <!--user and cart*-->
                        <div>
                            <a href="">
                                <img src="Customize assests/Userpf.png">
                                <p>User</p>
                            </a>
                        </div>
                        <div>
                            <a href="">
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
                        <form class="forms">
                            <div class="form-left">
                                    <div>
                                    <label for="numpages">Number of pages:</label><br><br>
                                    <input type="number" name="numpage" id="textinputs">
                                    <br><br>
                                    <label for="papertype">Type of paper:</label><br><br>
                                    <select name="papertype" id="dropdowns">
                                        <option value="Bond">Bond Paper</option>
                                        <option value="Copy">Copy Paper</option>
                                        <option value="Vellum">Vellum Paper</option>
                                        <option value="Photo">Photo Paper</option>
                                        <option value="Matte">Matte Paper</option>
                                    </select><br><br>
                                    <label for="papersize">Size of print:</label><br><br>
                                    <select name="papertype" id="dropdowns">
                                        <option value="A4">A4 size</option>
                                        <option value="Short">Short Size</option>
                                        <option value="Long">Long Size</option>
                                        <option value="Letter">Letter Size</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="docu">Upload your document:</label><br><br>
                                    <input type="file" id="docu" name="documentfile"><br><br>
                                    <label for="bind">Type of bind:</label><br><br>
                                    <input type="radio" id="bind" name="bind" value="Ring bind"><label for="ringbind">Ring bind</label><br><br>
                                    <input type="radio" id="bind" name="bind" value="Book bind"><label for="bookbind">Book bind</label>
                                </div>
                                <div>
                                    <label for="instructions" id="instructions">Special instructions:</label><br><br>
                                    <textarea name="instructions" id="textfields" rows="13" cols="50">Write down your special instructions</textarea>
                                </div>
                            </div>
                            
                            <div class="sidepanel">
                                <button type="reset" name="reset"><img src="Customize assests/Reset.png"><br><p>Reset</p></button><br>
                                <button type="submit" name="submit"><img src="Customize assests/Pay.png"><br><p>Pay</p></button>
                            </div>
                         </form>
                        </div>
            </section>

            <section class="container">
                <div class="Tarpaulins">
                    <h1>Tarpaulin Customization</h1>
                <form class="forms">
                    <div class="form-left">
                            <div>
                            <label for="numpages">Number of Copies:</label><br><br>
                            <input type="number" name="numcopies" id="textinputs">
                            <br><br>
                            <label for="papertype">Type of Material:</label><br><br>
                            <select name="papertype" id="dropdowns">
                                <option value="Bond">Bond Paper</option>
                                <option value="Copy">Copy Paper</option>
                                <option value="Vellum">Vellum Paper</option>
                            </select><br><br>
                            <label for="papersize">Size of Tarpaulin:</label><br><br>
                            <input type="number" name="sizecopies" id="textinputs">
                        </div>
                        <div>
                            <label for="docu">Upload your document:</label><br><br>
                            <input type="file" id="docu" name="documentfile"><br><br>
                            <label for="bind">With stand:</label><br><br>
                            <input type="radio" id="bind" name="stand" value="Yes"><label for="Yes">Yes</label><br><br>
                            <input type="radio" id="bind" name="stand" value="No"><label for="No">No</label>
                        </div>
                        <div>
                            <label for="instructions" id="instructions">Special instructions:</label><br><br>
                            <textarea name="instructions" id="textfields" rows="13" cols="50">Write down your special instructions</textarea>
                        </div>
                    </div>
                    
                    <div class="sidepanel">
                        <button type="reset" name="reset"><img src="Customize assests/Reset.png"><br><p>Reset</p></button><br>
                        <button type="submit" name="submit"><img src="Customize assests/Pay.png"><br><p>Pay</p></button>
                    </div>
                 </form>
                </div>
            </section>

            <section class="container">
                <div class="Posters">
                    <h1>Poster Customization</h1>
                <form class="forms">
                    <div class="form-left">
                            <div>
                            <label for="numpages">Number of Copies:</label><br><br>
                            <input type="number" name="numcopies" id="textinputs">
                            <br><br>
                            <label for="papertype">Type of Material:</label><br><br>
                            <select name="papertype" id="dropdowns">
                                <option value="Bond">Bond Paper</option>
                                <option value="Copy">Copy Paper</option>
                                <option value="Vellum">Vellum Paper</option>
                            </select><br><br>
                            <label for="papersize">Size of Tarpaulin:</label><br><br>
                            <input type="number" name="sizecopies" id="textinputs">
                        </div>
                        <div>
                            <label for="docu">Upload your document:</label><br><br>
                            <input type="file" id="docu" name="documentfile"><br><br>
                            <label for="bind">With stand:</label><br><br>
                            <input type="radio" id="bind" name="stand" value="Yes"><label for="Yes">Yes</label><br><br>
                            <input type="radio" id="bind" name="stand" value="No"><label for="No">No</label>
                        </div>
                        <div>
                            <label for="instructions" id="instructions">Special instructions:</label><br><br>
                            <textarea name="instructions" id="textfields" rows="13" cols="50">Write down your special instructions</textarea>
                        </div>
                    </div>
                    
                    <div class="sidepanel">
                        <button type="reset" name="reset"><img src="Customize assests/Reset.png"><br><p>Reset</p></button><br>
                        <button type="submit" name="submit"><img src="Customize assests/Pay.png"><br><p>Pay</p></button>
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
         </script>
    </footer>
    
</html>