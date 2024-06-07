<?php
require('./backend/session.php');
$query = "SELECT * FROM home_edit WHERE id = 1;";

$result = mysqli_query($conn, $query);


if ($result || mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    $header_text = $row['above_text'];


}

else {
    echo "<script>console.log('Error: .$query');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="icon" href="Homepage assets/LOGO.png" type="image/png">
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
                    <button id="home-redirect"><b>Home</b></s></button>
                    <button id="products-redirect"><b>Products</b></button>
                    <button id="customs-redirect"><b>Customs</b></b>
            </div>
            </div>
            
            <div class="user-cart"> <!--user and cart*-->
                <div>
                    <a href="Userpage Index.php">
                        <img src="Userpage assets/Userpf.png">
                        <p>User</p>
                    </a>
                </div>
                <div>
                    <a href="Cart-index.php">
                        <img src="Userpage assets/Cart.png">
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

    <?php
    $email = $_SESSION['username'];
    $id = $_SESSION['user_id'];

    $query = "SELECT * FROM user_credentials WHERE username = '$email' AND id = $id";

    $result = mysqli_query($conn, $query);
    
    if ($result || mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $city = $row['city'];
        $barangay = $row['barangay'];
        $streetNumber = $row['streetNumber'];
        $postal = $row['postal'];
        $contactnum = $row['contactnum'];
        $image_file = $row['image_name'];
        $streetName = $row['streetName'];


    }
    ?>
    <div class="lower-grey"><p><?php echo $header_text; ?></p></div>
    <section class="userinfo">
            <div class="userinfo-container">
                <div class="alluserinfo">
                    <div class="profile">
                        <img src="Userpage assets/<?php echo $image_file;?>" alt="user">
                    </div>
                    <div>
                        <p><b>First Name</b></p>
                        <p><?php echo $fname;?></p>
                       
                        <br>
                        <p><b>Last Name</b></p>
                        <p><?php echo $lname;?></p>
                        <br>
                        <p><b>Street/House no.</b></p>
                        <p><?php echo $streetNumber;?></p>
                    </div>
                    <div>
                        <p><b>Street Name</b></p>
                        <p><?php echo $streetName;?></p>
                        <br>
                        <p><b>Barangay</b></p>
                        <p><?php echo $barangay;?></p>
                        <br>
                        <p><b>City</b></p>
                        <p><?php echo $city;?></p>
                        <br>
                        
                        
                        
                    </div>
                    <div>
                        <p><b>Zip Code</b></p>
                        <p><?php echo $postal;?></p>
                        <br>
                        <p><b>Contact Number</b></p>
                        <p><?php echo $contactnum;?></p>
                        <br>
                        <p><b>Email</b></p>
                        <p><?php echo $email;?></p>
                    </div>
                </div>
                <div class="editbutton">
                    <button id="edit_userinfo">Edit User Information</button>
                </div>
            </div>


        <div id="popup-form" class="popup-form">
        <span class="close-button">&times;</span>
            <div class="popup-content">
                <h2>Edit User Information</h2>
                <form method="POST" enctype="multipart/form-data" class="form-user-edit">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" value="<?php echo $fname;?>">
                    
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" value="<?php echo $lname;?>">

                    <label for="streetNumber">Street/House no.:</label>
                    <input type="text" id="streetNumber" name="streetNumber" value="<?php echo $streetNumber;?>">

                    <label for="streetName">Street Name:</label>
                    <input type="text" id="streetName" name="streetName" value="<?php echo $streetName;?>">
                    
                    
                    <label for="barangay">Barangay:</label>
                    <input type="text" id="barangay" name="barangay" value="<?php echo $barangay;?>">

                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" value="<?php echo $city;?>">
                    
                    
                    <label for="postal">Zip Code:</label>
                    <input type="text" id="postal" name="postal" value="<?php echo $postal;?>">
                    
                    <label for="contactnum">Contact Number:</label>
                    <input type="text" id="contactnum" name="contactnum" value="<?php echo $contactnum;?>">
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email;?>">
                    
                    <label for="profile-image">Profile Image:</label>
                    <input type="file" id="profile-image" name="profile-image">
                    
                    <button type="submit" name="submit-edit">Save</button>
                </form>
            </div>
        </div>
        <div id="overlay" class="overlay"></div>
    </section>
    <?php
        if (isset($_POST['submit-edit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $city = $_POST['city'];
            $barangay = $_POST['barangay'];
            $streetNumber = $_POST['streetNumber'];
            $streetName = $_POST['streetName'];
            $postal = $_POST['postal'];
            $contactnum = $_POST['contactnum'];
            $email = $_POST['email'];
            
            $targetPath = "./Userpage assets/";
            if (isset($_FILES['profile-image']) && $_FILES['profile-image']['error'] == 0) {
                $fileName = basename($_FILES["profile-image"]["name"]);
                $targetPath = $targetPath . $fileName;

                if (move_uploaded_file($_FILES["profile-image"]["tmp_name"], $targetPath)) {
                    $query = "UPDATE user_credentials SET 
                            fname = '$fname', 
                            lname = '$lname', 
                            city = '$city', 
                            barangay = '$barangay', 
                            streetNumber = '$streetNumber', 
                            streetName = '$streetName',
                            postal = '$postal', 
                            contactnum = '$contactnum', 
                            username = '$email', 
                            image_name = '$fileName' 
                            WHERE id = $id";
                } else {
                    echo "<script>console.log('Error moving the uploaded file.');</script>";
                }
            } else {
                // Update the database with new information without changing the image
                $query = "UPDATE user_credentials SET 
                        fname = '$fname', 
                        lname = '$lname', 
                        city = '$city', 
                        barangay = '$barangay', 
                        streetNumber = '$streetNumber', 
                        streetName = '$streetName', 
                        postal = '$postal', 
                        contactnum = '$contactnum', 
                        username = '$email' 
                        WHERE id = $id";
            }

            if (mysqli_query($conn, $query)) {
                echo "<script>console.log('User information updated successfully.');</script>";
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "<script>console.log('Error updating record: " . mysqli_error($conn) . "');</script>";
            }
        }
        ?>

    <section class="product_status">
        <div class="status-container">
            <div class="status-title"><h2>Product Status</h2></div>
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

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const editButton = document.getElementById('edit_userinfo');
            const popupForm = document.getElementById('popup-form');
            const overlay = document.getElementById('overlay');
            const closeButton = document.querySelector('.close-button');

            editButton.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent the default button behavior
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


</html>