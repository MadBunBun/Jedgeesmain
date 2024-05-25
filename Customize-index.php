<?php

require('./backend/session.php');
require('./backend/database.php');

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
                                    <input type="number" name="numpage" id="pages" required>
                                    <br><br>
                                    
                                    
                                    
                                </div>
                                <div>
                                    <label for="docu" required>Upload your document:</label><br><br>
                                    <input type="file" id="docu" name="documentfile"><br><br>
                                    <label for="bind">Type of bind:</label><br><br>
                                    <input type="radio" class="binding" id="bind1" name="bind" value="Small Ring Bind"><label for="smallringbind">Small Ring Bind</label><br><br>
                                    <input type="radio" class="binding" id="bind2" name="bind" value="Big Ring Bind"><label for="bigringbind">Big Ring Bind</label><br><br>
                                    <input type="radio" class="binding" id="bind3" name="bind" value="Book Bind"><label for="bookbind">Book bind</label><br><br>
                                    <input type="radio" class="binding" id="bind4" name="bind" value="None" required><label for="none">None</label><br><br>
                                   <br><br>
                                </div>
                                <div>
                                    <label for="instructions" id="instructions">Special instructions:</label><br><br>
                                    <textarea name="instructions" id="textfields" rows="13" cols="50" placeholder="Write down your special instructions"></textarea>
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
                            </div>
                            <?php 
                                if (isset($_POST['submit'])) {
                                    $paper = $_POST['papertype'];
                                    $color = $_POST['typecolor'];
                                    $size = $_POST['size'];
                                    $pages = $_POST['numpages'];
                                    $docu = $_POST['documentfile'];
                                    $bind = $_POST['bind'];
                                } 

                            ?>
                            <div class="sidepanel">
                                <button type="reset" name="reset"><img src="Customize assests/Reset.png"><br><p>Reset</p></button><br>
                                <button style="display: block;" type="button" id="checkprice"><img src="Customize assests/Pay.png"><br><p>Check Price</p></button>
                                <button style="display: block;" type="submit" name="submit" id="submit"><img src="Customize assests/Pay.png"><br><p>Pay</p></button>

                                
                               
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
                            <label for="papersize">Size of Poster:</label><br><br>
                            <input type="number" name="sizecopies" id="textinputs">
                        </div>
                        <div>
                            <label for="docu">Upload your document:</label><br><br>
                            <input type="file" id="docu" name="documentfile"><br><br>
                            <label for="colors">Type of print:</label><br>
                            <select name="typecolor" id="dropdowns">
                                <option value="Colored">Colored</option>
                                <option value="B&W">B&W</option>
                            </select><br><br>
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

                                    <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                            var paper = document.getElementById('papertype');
                                            var color = document.getElementById('typecolor');
                                            var size = document.getElementById('printsize');
                                            var pages = document.getElementById('pages');
                                            var resibo = document.getElementById('resibo');
                                            
                                            
                                            
                                            var checkpriceButton = document.getElementById('checkprice');
                                            var submit = document.getElementById('submit');

                                            var bondpaper = "Bond Paper";
                                            var copypaper = "Copy Paper";
                                            var vellumpaper = "Vellum Paper";
                                            var photopaper = "Photo Paper";
                                            var mattepaper = "Matte Paper";

                                            var colored = "Colored";
                                            var bw = "B&W";

                                            var a4 = "A4";
                                            var short = "Short";
                                            var long = "Long";

                                            

                                            var smallbind = "Small Ring Bind";
                                            var bigbind = "Big Ring Bind";
                                            var bookbind = "Book Bind";
                                            var none = "None";

                                            
                                            checkpriceButton.addEventListener('click', function() {
                                                var bind = document.querySelector('input[name="bind"]:checked');
                                                var totalpages = 0;
                                                var bookbindpercent = .25;
                                                var smallringpercent = 10;
                                                var bigringpercent = 15;
                                                var total = 0;
                                                var pagesInt = parseFloat(pages.value);
                                                var bindprice = 0;
                                                

                                                // checkpriceButton.style.display = 'none';
                                                // submit.style.display = 'block';
                                                resibo.style.display = 'block';
                                                
                
                                                if (paper.value === bondpaper) {
                                                    if (bw === color.value) {
                                                    if (short === size.value) {

                                                        totalpages += (pagesInt * 2.00);
                                                    }
                                                    else if(a4 === size.value) {
                                                        totalpages += (pagesInt * 2.00);
                                                    }
                                                    else if(long === size.value) {
                                                        totalpages += (pagesInt * 3.00);
                                                    }
                                                    else {
                                                        console.log("Must be some Error 1");
                                                    }
                                                }

                                                    else if (colored === color.value) {
                                                    if (short === size.value) {
                                                        totalpages += (pagesInt * 5.00);
                                                    }
                                                    else if(a4 === size.value) {
                                                        totalpages += (pagesInt * 5.00);
                                                    }
                                                    else if(long === size.value) {
                                                        totalpages += (pagesInt * 10.00);
                                                    }
                                                    else {
                                                        console.log("Must be some Error 1.2");
                                                    }
                                                }

                                                    else {
                                                    console.log("Must be some Error 2");
                                                }
                                                }

                                                else if (paper.value === copypaper) {
                                                    if (bw === color.value) {
                                                    if (short === size.value) {
                                                        totalpages += (pagesInt * 1.50);
                                                    }
                                                    else if(a4 === size.value) {
                                                        totalpages += (pagesInt * 1.50);
                                                    }
                                                    else if(long === size.value) {
                                                        totalpages += (pagesInt * 2.00);
                                                    }
                                                    else {
                                                        console.log("Must be some Error 3");
                                                    }
                                                }

                                                    else if (colored === color.value) {
                                                    if (short === size.value) {
                                                        totalpages += (pagesInt * 3.00);
                                                    }
                                                    else if(a4 === size.value) {
                                                        totalpages += (pagesInt * 3.00);
                                                    }
                                                    else if(long === size.value) {
                                                        totalpages += (pagesInt * 8.00);
                                                    }
                                                    else {
                                                        console.log("Must be some Error 3.2");
                                                    }
                                                }

                                                    else { 
                                                    console.log("Must be some Error 4");
                                                }

                                                }

                                                else if (paper.value === vellumpaper) {
                                                    if (bw === color.value) {
                                                        if (short === size.value) {
                                                            totalpages += (pagesInt * 10.00);
                                                        }
                                                        else if(a4 === size.value) {
                                                            totalpages += (pagesInt * 10.00);
                                                        }
                                                        else if(long === size.value) {
                                                            totalpages += (pagesInt * 13.00);
                                                        }
                                                        else {
                                                            console.log("Must be some Error 4.1");
                                                        }
                                                }

                                                else if (colored === color.value) {
                                                    if (short === size.value) {
                                                        totalpages += (pagesInt * 13.00);
                                                    }
                                                    else if(a4 === size.value) {
                                                        totalpages += (pagesInt * 13.00);
                                                    }
                                                    else if(long === size.value) {
                                                        totalpages += (pagesInt * 16.00);
                                                    }
                                                    else {
                                                        console.log("Must be some Error 4.2");
                                                    }
                                                }

                                                else { 
                                                    console.log("Must be some Error 5");
                                                }
                                            }

                                                else if (paper.value === photopaper){
                                                    if (bw === color.value) {
                                                        if (short === size.value) {
                                                            totalpages += (pagesInt * 6.00);
                                                        }
                                                        else if(a4 === size.value) {
                                                            totalpages += (pagesInt * 6.00);
                                                        }
                                                        else if(long === size.value) {
                                                            totalpages += (pagesInt * 10.00);
                                                        }
                                                        else {
                                                            console.log("Must be some Error 5.1");
                                                        }
                                                    }

                                                    else if (colored === color.value) {
                                                        if (short === size.value) {
                                                            totalpages += (pagesInt * 12.00);
                                                        }
                                                        else if(a4 === size.value) {
                                                            totalpages += (pagesInt * 12.00);
                                                        }
                                                        else if(long === size.value) {
                                                            totalpages += (pagesInt * 15.00);
                                                        }
                                                        else {
                                                            console.log("Must be some Error 5.2");
                                                        }
                                                    }

                                                    else { 
                                                        console.log("Must be some Error 6");
                                                    }

                                                }
                                           
                                                else if (paper.value === mattepaper){
                                                    if (bw === color.value) {
                                                        if (short === size.value) {
                                                            totalpages += (pagesInt * 12.00);
                                                        }
                                                        else if(a4 === size.value) {
                                                            totalpages += (pagesInt * 12.00);
                                                        }
                                                        else if(long === size.value) {
                                                            totalpages += (pagesInt * 15.00);
                                                        }
                                                        else {
                                                            console.log("Must be some Error 6.1");
                                                        }
                                                    }

                                                else if (colored === color.value) {
                                                    if (short === size.value) {
                                                        totalpages += (pagesInt * 15.00);
                                                    }
                                                    else if(a4 === size.value) {
                                                        totalpages += (pagesInt * 15.00);
                                                    }
                                                    else if(long === size.value) {
                                                        totalpages += (pagesInt * 20.00);
                                                    }
                                                    else {
                                                        console.log("Must be some Error 6.2");
                                                    }
                                                }

                                                else { 
                                                    console.log("Must be some Error 7");
                                                }

                                            }

                                                if (bind.value === smallbind) {
                                                    total+= (totalpages + smallringpercent);
                                                    bindprice += smallringpercent;
                                                }
                                                else if (bind.value === bigbind) {
                                                    total += (totalpages + bigringpercent);
                                                    bindprice += bigringpercent;
                                                }

                                                else if (bind.value === bookbind) {
                                                    total += (totalpages + (totalpages * bookbindpercent));
                                                    bindprice += (totalpages * bookbindpercent);

                                                }
                                                else {
                                                    total += totalpages;
                                                }

                                                document.getElementById('paper').textContent = paper.value;
                                                document.getElementById('color').textContent = color.value;
                                                document.getElementById('size').textContent = size.value;
                                                document.getElementById('numpage').textContent = pages.value;
                                                document.getElementById('binding').textContent = bind.value;
                                                document.getElementById('totalprice').textContent = total;
                                                document.getElementById('bindprice').textContent = bindprice.toFixed(2);
                                                document.getElementById('pagesprice').textContent = totalpages.toFixed(2);
                                                
                                                
                                        });
                                        });

                                        </script>
    </footer>
    
</html>