<?php
require('backend/database.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $baranggay = $_POST['baranggay'];
    $sthouse = $_POST['sthouse'];
    $zip = $_POST['zip'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    
    $sql = "UPDATE customers 
            SET fname=?, mname=?, lname=?, city=?, baranggay=?, sthouse=?, zip=?, contact=?, email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssiis", $fname, $mname, $lname, $city, $baranggay, $sthouse, $zip, $contact, $email);

    if ($stmt->execute()) {
        echo "<script>console.log('Customer data updated successfully.')</script>";
    } else {
        echo "<script>console.log('Error updating customer data:')</script>" . $conn->error;
    }
}


$sql = "SELECT * FROM customers LIMIT 1"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    $fname = $row['fname'];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $city = $row['city'];
    $baranggay = $row['baranggay'];
    $sthouse = $row['sthouse'];
    $zip = $row['zip'];
    $contact = $row['contact'];
    $email = $row['email'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
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
                    <div><a href="Homepage-Index.php"><b>Home</b></a></div>
                    <div><a href="Products-index.html"><b>Products</b></a></div>
                    <div><a href="Customize-index.php"><b>Customs</b></a></div>
                </div>
            </div>
            
            <div class="user-cart"> <!--user and cart*-->
                <div>
                    <a href="Userpage Index.html">
                        <img src="Userpage assets/Userpf.png">
                        <p>User</p>
                    </a>
                </div>
                <div>
                    <a href="Cart-index.html">
                        <img src="Userpage assets/Cart.png">
                        <p>Cart</p>
                    </a>
                </div>
            </div>
    </section>
    <div class="lower-grey"><p>You need it. We print it. You love it.</p></div>
    <section class="userinfo">
            <div class="userinfo-container">
                <form action="Userpage Index.php" method="post">
                    <div class="alluserinfo">
                        <div class="profile">
                            <img src="Userpage assets/Userpf.png" alt="user">
                        </div>
                        <div>
                            <p><b>First Name</b></p>
                            <p><input type="text" name="fname" value="<?php echo $fname; ?>"></p>
                            <br>
                            <p><b>Middle Name</b></p>
                            <p><input type="text" name="mname" value="<?php echo $mname; ?>"></p>
                            <br>
                            <p><b>Last Name</b></p>
                            <p><input type="text" name="lname" value="<?php echo $lname; ?>"></p>
                        </div>
                        <div>
                            <p><b>City</b></p>
                            <p><input type="text" name="city" value="<?php echo $city; ?>"></p>
                            <br>
                            <p><b>Barangay</b></p>
                            <p><input type="text" name="baranggay" value="<?php echo $baranggay; ?>"></p>
                            <br>
                            <p><b>Street/House no.</b></p>
                            <p><input type="text" name="sthouse" value="<?php echo $sthouse; ?>"></p>
                        </div>
                        <div>
                            <p><b>Zip Code</b></p>
                            <p><input type="number" name="zip" value="<?php echo $zip; ?>"></p>
                            <br>
                            <p><b>Contact Number</b></p>
                            <p><input type="number" name="contact" value="<?php echo $contact; ?>"></p>
                            <br>
                            <p><b>Email</b></p>
                            <p><input type="text" name="email" value="<?php echo $email; ?>"></p>
                        </div>
                    </div>
                    <div class="editbutton">
                        <button type="submit" id="edit_userinfo">Change</button>
                    </div>
                </form>
               
                <div class="editbutton">
                    <button type="button" id="edit_userinfo">Edit User Information</button>
                </div>
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

</html>