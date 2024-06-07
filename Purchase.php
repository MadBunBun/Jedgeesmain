<?php 

require('./backend/database.php');

session_start();

$type = $_SESSION['type_print'];

if ($_SESSION['session'] == 'invalid' || empty($_SESSION['session'])){
    $_SESSION['session'] = 'invalid';

    echo "<script>window.location.href = '/jedgeesmain/Homepage-Index.php'</script>";
}


if (empty($_SESSION['type_print']) || $_SESSION['type_print'] == 'invalid'){
    $_SESSION['type_print'] = 'invalid';
    echo "<script>window.location.href = '/jedgeesmain/Customize-index.php'</script>";
}

$billing_id = $_SESSION['billing_id'];
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/Purchase.css" type="text/css">
        <title>Jedgees</title>
    </head>
    <body>
        <div class="uppergrey"></div>
        <div class="Purchasewrapper">
            <div class="Purchasecontainer">
                <div class="title">
                    <img src="Purchase assets/coins.png" alt="Human Icon">
                    <h2>Jedgees Purchase</h2>
                </div>
                <form action="backend/purchase-save.php" method="POST" enctype="multipart/form-data">
                    <div >
                        <label for="Step 1">Step 1: <b>Scan the QR CODE</b></label><br><br>
                        <div >
                        <img src="Purchase assets/Qr code.png" alt="QRcode" id="QrCode">
                        </div>
                    </div>
                    <div>
                        <label for="Step 2">Step 2: <b>Screenshot the receipt</b></label><br> <br>
                        <div>
                        <label for="Example">Example:</label><br> <br>
                        <img src="Purchase assets/Receipt.png" alt="receipt" id="receipt">
                        </div>
                        
                    </div>
                    <div>
                        <label for="Step 3">Step 3:<b> Type the amount</b></label><br>
                        <input type="Amount" id="Amount" name="amount" required>
                    </div>
                    <div>
                        <label for="Step 4">Step 4: <b>Type the referral No.</b></label><br>
                        <input type="text" id="referral" name="referral" equired>
                    </div>
                    <div>
                        <label for="Step 5">Step 5: <b>Upload the Screenshot</b></label><br><br>
                        <input type="file" id="image" name="file" class="image-upload" required>
                        <span id="val"></span>
                    
                    </div>
                    <button type="submit" name="submit-purchase" class="Signup">Purchase</button>
                </form>
                
            </div><!--First container-->
                <?php
                    if ($type === "print_customization") {

                        $query = "SELECT * FROM print_customization WHERE billing_id='$billing_id'";
                        $result = mysqli_query($conn, $query);

                        if($result) {
                            $row = mysqli_fetch_assoc($result);

                            $paper = $row['type_paper'];
                            $color = $row['color'];
                            $size = $row['size'];
                            $pages = $row['num_pages'];
                            $type_bind = $row['bind'];
                            $pages_price = $row['pages_price'];
                            $bind_price = $row['bind_price'];
                            $total = $row['total'];   
                            $down_payment = $row['down_payment'];  
                            
                        }

                        echo "
                        <style> 
                        .Receiptcontainer {
                            height: 390px;
                        }
                        </style>

                        <div class=\"Receiptcontainer\" id=\"resibo\">
                           <div class=\"title\">
                               <img src=\"Purchase assets/handshake.png\" alt=\"handshake\">
                           <h2>Jedgees Receipt</h2>
                           </div>
                           <hr>
                       <div class=\"total-info-container\">
                           <div class=\"total-info\">
                               <p><b>Type of Paper: </b><span id=\"paper\">$paper</span></p>
                               <p><b>Type of Print: </b><span id=\"color\">$color</span></p>
                               <p><b>Size: </b><span id=\"size\">$size</span></p>
                               <p><b>Number of Pages: </b><span id=\"numpage\">$pages</span></p>
                               <p><b>Type of Bind: </b><span id=\"binding\">$type_bind</span></p>
                               <p><b>Total: </b><span id=\"binding\"></span></p>
                           </div>
                           <div class=\"total-prices\">
                               <p class=\"total-dash\">-</p>
                               <p class=\"total-dash\">-</p>
                               <p class=\"total-dash\">-</p>
                               <p id=\"pagesprice\">".number_format($pages_price, 2)."</p>
                               <p class=\"total-dash\" id=\"bindprice\">".number_format($bind_price, 2)."</p>
                               <p id=\"totaldash\">₱".number_format($total, 2)."</p>
                           </div>
                       </div>
                       <hr>
                       <div class=\"subtotal-container\">
                           <h3>Down Payment (To be paid): </h3>
                            <p id=\"totalprice\">₱".number_format($down_payment, 2)."</p>
                           
                       </div>
                   </div>
                   ";
               }

               else if ($type === 'taurp_customization') {
                    $query = "SELECT * FROM taurp_customization WHERE billing_id='$billing_id'";
                    $result = mysqli_query($conn, $query);

                    if($result) {
                        $row = mysqli_fetch_assoc($result);

                        $feet_1 = $row['feet_1'];
                        $feet_2 = $row['feet_2'];
                        $copies = $row['copies'];
                        $with_layout = $row['with_layout'];
                        $taurp_price = $row['taurp_price'];
                        $copies_price = $row['copies_price'];
                        $layout_price = $row['layout_price'];
                        $total_price = $row['total_price'];
                        $down_payment = $row['down_payment'];

                        $display_value = $with_layout === 'No' ? 'none' : 'block';
                        
                    }
                    echo "
                    <style> 
                        .Receiptcontainer {
                            height: 382px;
                        }
                        </style>

                    <div class=\"Receiptcontainer\" id=\"resibo\">
                        <div class=\"title\">
                            <img src=\"Purchase assets/handshake.png\" alt=\"handshake\">
                            <h2>Jedgees Receipt</h2>
                        </div>
                        <hr>
                        <div class=\"size-taurp-price\">
                            <p><b>Size of Taurpalin: </b><span id=\"size-taurp\">" . $feet_1 . "x" . $feet_2 . "</span></p>
                            <p class=\"total-dash\" id=\"size-taurp-price\">" . number_format($taurp_price, 2) . "</p>
                        </div>
                        <hr>
                        <div class=\"total-info-container\">
                            <div class=\"total-info\">
                                <p><b>Number of Copies: </b><span id=\"num-taurp\">" . $copies . "</span></p>
                                <p><b>With our layout?: </b><span id=\"layout\">" . $with_layout . "</span></p>
                                <p style=\"display: " . $display_value . ";\" id=\"layout-price-display\"><b>Layout Price: </b></p>
                                <p><b>Total: </b><span id=\"layout\"></span></p>

                            </div>
                            <div class=\"total-prices\">
                                <p class=\"total-dash\" id=\"num-taurp-price\">" . number_format($copies_price, 2) . "</p>
                                <p class=\"total-dash\" id=\"with-layout-dash\">-</p>
                                <p style=\"display: " . $display_value . ";\" class=\"total-dash\" id=\"layout-price\">" . number_format($layout_price, 2) . "</p>
                                <p id=\"total-dash\">" . number_format($total_price, 2) . "</p>
                            </div>
                        </div>
                        <hr>
                        <div class=\"subtotal-container\">
                            <h3>Down Payment (To be paid): </h3>
                            <p id=\"totalprice-taurp\">₱" . number_format($down_payment, 2) . "</p>
                            
                        </div>
                    </div>
                    ";
               }
               ?>
        </div>
        <div class="background">
            <img src="Purchase assets/LOGO.png" id="logo" alt="Logo">
        </div>

        <footer>
            <div class="footer-container">
                <img id="logo-footer" src="Purchase assets/LOGO.png" alt="Logo">
                <p class="contact">CONTACT US: </p>
                <div class="phone">
                    <img src="Purchase assets/phone.png" id="phone" alt="Phone Icon">
                    <p>Telephone: 794-27-67</p>
                </div>
                <div class="message">
                    <img src="Purchase assets/message.png" id="message" alt="Message Icon">
                    <p>jedgees18digitalprinting@gmail.com</p>
                </div>
                <div class="coins">
                    <img src="Purchase assets/coins.png" id="coins" alt="Coins Icon">
                    <p>Service Pricing</p>
                </div>
                <div class="human">
                    <img src="Purchase assets/human.png" id="human" alt="Human Icon">
                    <p>About Jedgees</p>
                </div>
                <div class="handshake">
                    <img src="Purchase assets/handshake.png" id="handshake" alt="Handshake Icon">
                    <p>Service Offered</p>
                </div>
            </div>
        </footer>

      
    </body>
</html>
