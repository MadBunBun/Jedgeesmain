
<?php
    require('./backend/database.php');
    $_SESSION['type_print'] = 'invalid';
    session_start();

    // if ($_SESSION['session'] == 'invalid' || empty($_SESSION['session'])){
    //     $_SESSION['session'] = 'invalid';
    // }


    if (!isset($_SESSION['session'])) {
        $_SESSION['session'] = 'invalid';
    }


    // if ($_SESSION['session'] == 'valid'){
    //     echo "<script>window.location.href = '/jedgeesmain/Homepage-Index.php';</script>";    
    // }

    $invalid_session_condition = $_SESSION['session'] == 'invalid' || empty($_SESSION['session']);

?>


<!DOCTYPE html>
<html>
        <head>
        <link rel="icon" href="Homepage assets/LOGO.png">

            <?php
            if ($invalid_session_condition) {
                echo "
                <link rel=\"stylesheet\" href=\"stylesheets/homepage.css\" type=\"text/css\">
                
                ";


            }
            else {
                echo "
                <link rel=\"stylesheet\" href=\"stylesheets/homepage-session.css\" type=\"text/css\">
            
                ";
            }

            ?>
            
            <title>Jedgees</title>
            
        </head>
        <body>
            
            <div class="uppergrey"></div>
            <section class="Navigation"><!--Navigation-->
                    <div class="logo-nav">
                        <img src="Homepage assets/LOGO.png" id="logo"><!--logo-->
                        <div class="Nav"><!--Navigation-->
                                <button class="ol nav-button" id="home-redirect"><b>Home</b></button>
                                <button class="ol nav-button" id="products-redirect"><b>Products</b></button>
                                <button class="ol nav-button" id="customs-redirect"><b>Customs</b></button>
                                
                        </div>
                        
                    </div>
                    <?php

                    if ($_SESSION['session'] === 'customer') {
                    echo '
                    <div class="user-cart"> <!--user and cart*-->
                        <div>
                            <a href="Userpage index.php">
                                <img src="Homepage assets/Userpf.png">
                                <p>User</p>
                            </a>
                        </div>
                        <div>
                            <a href="Cart-index.php">
                                <img src="Homepage assets/Cart.png">
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
                    ';
                    } else if ($_SESSION['session'] === 'admin') {
                        echo '
                    <div class="user-cart"> <!--user and cart*-->
                        
                        <form action="backend/logout.php" method="POST" class="Logout">
                            <button type="submit" name="logout">
                                <img src="Homepage assets/Logout.png" alt="">
                                <p>Logout</p>
                            </button>
                       </form>
                    </div>
                    ';
                    }
                    ?>
            </section>
            
            <?php
            $query = "SELECT * FROM home_edit WHERE id = 1";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
        
                $row = mysqli_fetch_assoc($result);

                $above_text = $row['above_text'];
                $banner_h2 = $row['banner_h2'];
                $banner_p = $row['banner_p'];
                $lower_text = $row['lower_text'];
                $image_filename = $row['image_filename'];
                $image = "./Homepage\ assets/" . $image_filename;


                if ($invalid_session_condition) {
                    echo "
                    <style>
                    .product-wrapper {
                        padding-left: 2%;
                    }
                    .login-container {
                        margin: 1% 0 0 16%;
                    }
                    </style>
                    <div class=\"lower-grey\"><p>$above_text</p></div>
                    <section class=\"banner\" style=\"background: url($image);\">
                        <div class=\"bannertext-wrapper\">
                            <h2>
                            <b>$banner_h2</b>
                            </h2>
                            <p>
                                $banner_p
                            </p>
                        </div>
                    </section>
                <section class=\"lower-text\">
                    <h2>$lower_text</h2>
                </section>
                    <section class=\"products-login\">
                    <div class=\"product-wrapper\"><!--products-->
                    <div class=\"prod\">
                        <img src=\"Homepage assets/homepage-Product1.jpg\" id=\"prod-img\">
                        <div class=\"item-desc\">
                            <p>
                                Rushed Posters 
                                <br>₱90
                            </p>
                            <div></div><button type=\"ol button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                        </div>
                    </div>   
                    <div class=\"prod\">
                        <img src=\"Homepage assets/homepage-Product2.jpg\" id=\"prod-img\">
                        <div class=\"item-desc\">
                            <p>
                                Standing Tarpaulin
                                <br>₱200
                            </p>
                            <div></div><button type=\"ol button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\" ></button>
                        </div>
                    </div>
                    <div class=\"prod\">
                        <img src=\"Homepage assets/homepage-Product3.jpg\" id=\"prod-img\">
                        <div class=\"item-desc\">
                            <p>
                                Research Manuscripts
                                <br>₱100-200
                            </p>
                            <div></div><button type=\"ol button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                        </div>
                    </div>
                    <div class=\"prod\">
                        <img src=\"Homepage assets/homepage-Product4.jpg\" id=\"prod-img\">
                        <div class=\"item-desc\">
                            <p>
                                Posters
                                <br>₱200
                            </p>
                            <div></div><button type=\"ol button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                        </div>
                    </div>
                </div>
                    <div class=\"login-container\">
                    <div class=\"login\" id=\"relogin\">
                        <form method=\"POST\">
                        <div class=\"login-left\">
                            <div><label>EMAIL:</label><br><input type=\"email\" class=\"email\" name=\"User_Email\"></div>
                            <div><label>PASSWORD:</label><br></b><input type=\"password\" class=\"password\" name=\"User_Password\"></div>
                            <button type=\"submit\" name=\"login\"><b>LOGIN</b></button>
                        </div>
                        <div class=\"login-mid\">
                            <div></div>
                            <h2>OR</h2>
                            <div></div>
                        </div>
                        <div class=\"login-right\">
                        <a class=\"sn\" href=\"Signup-index.php\" style=\"text-decoration: none; color: white;\"><div><p><b>SIGN UP</b></p></div></a>
                        <a class=\"sn\" href=\"forgotpassword.php\" style=\"text-decoration: none; color: white;\"><div><p><b>FORGOT PASS</b></p></div></a>
                        </div>
                        </form>
                    </div>
                    <img src=\"Homepage assets/LOGO.png\" id=\"backgroundlogo\">       
                </div>
                </section>
                    <div class=\"popuplogin\" id=\"popuplogin\">
                    <div class=\"login\">
                        <form method=\"POST\">
                        <div class=\"login-left\">
                            <div><label>EMAIL:</label><br><input type=\"email\" class=\"email\" name=\"User_Email\"></div>
                            <div><label>PASSWORD:</label><br></b><input type=\"password\" class=\"password\" name=\"User_Password\"></div>
                            <button type=\"submit\" name=\"login\"><b>LOGIN</b></button>
                        </div>
                        <div class=\"login-mid\">
                            <div></div>
                            <h2>OR</h2>
                            <div></div>
                        </div>
                        <div class=\"login-right\">
                            <a class=\"sn\" href=\"Signup-index.php\" style=\"text-decoration: none; color: white;\"><div><p><b>SIGN UP</b></p></div></a>
                            <a class=\"sn\" href=\"forgotpassword.php\" style=\"text-decoration: none; color: white;\"><div><p><b>FORGOT PASS</b></p></div></a>
                        </div>
                        </form>
                        <button type=\"button\" class=\"closebtn\">x</button>
                    </div>
                </div>
                    <div class=\"overlay\" id=\"popuplogin\"></div>
                    <div class=\"overlay2\" id=\"popuplogin\"></div>
                    ";
                } 
                else if ($_SESSION['session'] === 'customer') {
                    echo "
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
                    <div class=\"lower-grey\"><p>$above_text</p></div>
                    <section class=\"banner\" style=\"background: url($image);\">
                        <div class=\"bannertext-wrapper\">
                            <h2>
                            <b>$banner_h2</b>
                            </h2>
                            <p>
                                $banner_p
                            </p>
                        </div>
                    </section>
                    <section class=\"lower-text\">
                        <h2>$lower_text</h2>
                    </section>
                    <section class=\"products-login\">
                    <div class=\"product-wrapper\">
                        <div class=\"prod\">
                            <img src=\"Homepage assets/homepage-Product1.jpg\" id=\"prod-img\">
                            <div class=\"item-desc\">
                                <p>
                                    Rushed Posters
                                    <br>₱90
                                </p>
                                <div></div><button type=\"button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                            </div>
                        </div>   
                        <div class=\"prod\">
                            <img src=\"Homepage assets/homepage-Product2.jpg\" id=\"prod-img\">
                            <div class=\"item-desc\">
                                <p>
                                    Standing Tarpaulin
                                    <br>₱200
                                </p>
                                <div></div><button type=\"button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                            </div>
                        </div>
                        <div class=\"prod\">
                            <img src=\"Homepage assets/homepage-Product3.jpg\" id=\"prod-img\">
                            <div class=\"item-desc\">
                                <p>
                                    Research Manuscripts
                                    <br>₱100-200
                                </p>
                                <div></div><button type=\"button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                            </div>
                        </div>
                        <div class=\"prod\">
                            <img src=\"Homepage assets/homepage-Product4.jpg\" id=\"prod-img\">
                            <div class=\"item-desc\">
                                <p>
                                    Posters
                                    <br>₱200
                                </p>
                                <div></div><button type=\"button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                            </div>
                        </div>
                    </div>
                    <div class=\"background-logo\">
                        <img src=\"Homepage assets/LOGO.png\" id=\"backgroundlogo\">
                    </div>
                </section>
                <script>
                document.getElementById(\"customs-redirect\").addEventListener(\"click\", function() {
                    window.location.href = \"./Customize-index.php\";
                });
                document.getElementById(\"home-redirect\").addEventListener(\"click\", function() {
                    window.location.href = \"./Homepage-Index.php\";
                });
                document.getElementById(\"products-redirect\").addEventListener(\"click\", function() {
                    window.location.href = \"./Products-Index.php\";
                });
                </script>
                ";
                }
                 else {

                        echo "
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
                            <div class=\"lower-grey\"><p>$above_text</p>
                            </div> 
                            
                            <style>
                                .edit-img {
                                    width: 23px;
                                }
                            </style>
                            <section class=\"banner\" style=\"background: url($image);\" >
                                <div class=\"bannertext-wrapper\">
                                    <h2>
                                    <b>$banner_h2</b>
                                    <a id=\"edit-banner-h2\" href=\"\" title=\"edit icons\"><img class=\"edit-img\" src=\"Homepage assets/edit.png\"> </a>
                                    </h2>
                                    <p>
                                        $banner_p
                                    </p>
                                </div>
                            </section>
                            <section class=\"lower-text\">
                                <h2>$lower_text</h2>
                            </section>

                            <div id=\"popup-form\" class=\"popup-form\">
                            <span class=\"close-button\">&times;</span>
                                <div class=\"popup-content\">
                                    <h2>Edit Banner Text</h2>
                                    <form class=\"popup-edit-form\" method=\"POST\" enctype=\"multipart/form-data\">
                                        <label for=\"header-text\">Header Text:</label>
                                        <input type=\"textfield\" id=\"header-text\" name=\"header-text\">
                                        <label for=\"banner-head\">Banner Head:</label>
                                        <input type=\"text\" id=\"banner-head\" name=\"banner-head\">
                                        <label for=\"banner-text\">Banner Text:</label>
                                        <input type=\"text\" id=\"banner-text\" name=\"banner-text\">
                                        <label for=\"lower-title\">Lower Title:</label>
                                        <input type=\"text\" id=\"lower-title\" name=\"lower-title\">
                                        <label>Header Image:</label>
                                        <input type=\"file\" id=\"file-image\" name=\"file-image\">
                                        <button type=\"submit\" name=\"submit-edit\" >Save</button>
                                    </form>
                                </div>
                            </div>
                            <div id=\"overlay\" class=\"overlay\"></div>
                            


                            <section class=\"products-login\">
                            <div class=\"product-wrapper\"><!--products-->
                                <div class=\"prod\">
                                    <img src=\"Homepage assets/homepage-Product1.jpg\" id=\"prod-img\">
                                    <div class=\"item-desc\">
                                        <p>
                                            Rushed Posters
                                            <br>₱90
                                        </p>
                                        <div></div><button type=\"button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                                    </div>
                                </div>   
                                <div class=\"prod\">
                                    <img src=\"Homepage assets/homepage-Product2.jpg\" id=\"prod-img\">
                                    <div class=\"item-desc\">
                                        <p>
                                            Standing Tarpaulin
                                            <br>₱200
                                        </p>
                                        <div></div><button type=\"button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                                    </div>
                                </div>
                                <div class=\"prod\">
                                    <img src=\"Homepage assets/homepage-Product3.jpg\" id=\"prod-img\">
                                    <div class=\"item-desc\">
                                        <p>
                                            Research Manuscripts
                                            <br>₱100-200
                                        </p>
                                        <div></div><button type=\"button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                                    </div>
                                </div>
                                <div class=\"prod\">
                                    <img src=\"Homepage assets/homepage-Product4.jpg\" id=\"prod-img\">
                                    <div class=\"item-desc\">
                                        <p>
                                            Posters
                                            <br>₱200
                                        </p>
                                        <div></div><button type=\"button\"><img src=\"Homepage assets/arrowbtn.png\" id=\"product-arrow\"></button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class=\"background-logo\">
                            <img src=\"Homepage assets/LOGO.png\" id=\"backgroundlogo\">
                            </div>
                            
                            </section>
                            
                            <script>
                            document.getElementById(\"customs-redirect\").addEventListener(\"click\", function() {
                                window.location.href = \"./Customize-index.php\";
                            });
                            document.getElementById(\"home-redirect\").addEventListener(\"click\", function() {
                                window.location.href = \"./Homepage-Index.php\";
                            });
                            document.getElementById(\"products-redirect\").addEventListener(\"click\", function() {
                                window.location.href = \"./Products-Index.php\";
                            });
                            </script>

                            <script>
                            document.addEventListener('DOMContentLoaded', (event) => {
                                const editBannerLink = document.getElementById('edit-banner-h2');
                                const popupForm = document.getElementById('popup-form');
                                const overlay = document.getElementById('overlay');
                                const closeButton = document.querySelector('.close-button');

                                editBannerLink.addEventListener('click', (e) => {
                                    e.preventDefault(); // Prevent the default link behavior
                                    popupForm.style.display = 'block';
                                    overlay.style.display = 'block';
                                });

                                closeButton.addEventListener('click', () => {
                                    popupForm.style.display = 'none';
                                    overlay.style.display = 'none';
                                });

                                overlay.addEventListener('click', () => {
                                    popupForm.style.display = 'none';
                                    overlay.style.display = 'none';
                                });
                            });
                        </script>

                            ";
                    }
                    
                    
                }

            if (isset($_POST['submit-edit'])) {
                $header_text = $_POST['header-text'];
                $banner_head = $_POST['banner-head'];
                $banner_text = $_POST['banner-text'];
                $lower_title = $_POST['lower-title'];
                
                $targetDir = "./Homepage assets/";
                if (isset($_FILES['file-image']) && $_FILES['file-image']['error'] == 0) {
                    $fileName = basename($_FILES["file-image"]["name"]);
                    $targetPath = $targetDir . $fileName;
                    

                    if (move_uploaded_file($_FILES["file-image"]["tmp_name"], $targetPath)) {
                        $query = "UPDATE home_edit SET above_text = '$header_text', banner_h2 = '$banner_head', banner_p = '$banner_text', lower_text = '$lower_title', image_filename = '$fileName' WHERE id = 1;";

            
                        if (mysqli_query($conn, $query)) {

                            echo "<script>console.log('Successing Updating!');</script>";
                            echo "<meta http-equiv='refresh' content='0'>";
                            echo "<meta http-equiv='refresh' content='0'>";



                        }
            
                        else {
                            echo "<script>console.log('Error: .$query');</script>";
                        }
                    }
            
                    else {
                        echo "<script>console.log('Moving Files Error!');</script>";
                    }
                   
                }
            
                else {
                    echo "<script>console.log('File upload error: " . $_FILES['file-image']['error'] . "');</script>";

                }
            
            
            }

            if (isset($_POST['login'])) {
                $username = $_POST['User_Email'];
                $password = $_POST['User_Password'];
        
                if (empty($username) || empty($password)) {
                    echo "<script>alert('Please fill up all the fields')</script>";
            } else {
                $query = "SELECT * FROM user_credentials WHERE username='$username' AND password= md5('$password')";
                $sqlvalidate = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($sqlvalidate);

                if (mysqli_num_rows($sqlvalidate) > 0) {
                    $id = $row['id'];
                    $email = $row['username'];
                    $role = $row['role'];
                    $_SESSION['session'] = $role;
                    $_SESSION['username'] = $email;
                    $_SESSION['user_id'] = $id;
                    echo "<meta http-equiv='refresh' content='0'>";

                    
        
                } else {
                    $_SESSION['session'] = 'invalid';
                    echo "<script>alert('Invalid Credentials!')</script>";
                    
                    
                }
            }
        }

            if (isset($_POST['logout'])) {

                $_SESSION['session'] = 'invalid';

                session_destroy();

                echo "<meta http-equiv='refresh' content='0'>";



            }

            ?>
            
            
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

             <script>
            // function popuplogin(){
            //     document.getElementById("popuplogin").classList.toggle("active");
            // }

            document.querySelectorAll('.ol').forEach(button => {
            button.addEventListener('click', function() {
            var elements = document.querySelectorAll('.overlay, .popuplogin');
            elements.forEach(function(element) {
            element.style.setProperty('display', 'flex');

            });
         });
    });
            document.querySelectorAll('.closebtn').forEach(button => {
            button.addEventListener('click', function() {
            var elements = document.querySelectorAll('.overlay, .popuplogin');
            elements.forEach(function(element) {
            element.style.setProperty('display', 'none');
            });
         });
    });
            


        </script>
             
        </footer>
</html>