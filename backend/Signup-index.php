<?php
require('./session.php');
require('./database.php');
$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contactnum = $_POST['contactnum'];
$streetNumber = $_POST['streetNumber'];
$streetName = $_POST['streetName'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$postal = $_POST['postal'];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$query = "INSERT INTO user_credentials (id, username, password, fname, mname, lname, contactnum, streetNumber, streetName, barangay, city, postal) VALUES (null, '$email', md5('$password'), '$fname', '$mname', '$lname', '$streetNumber', '$streetName', '$barangay', '$city', '$postal')";
if (mysqli_query($conn, $query)) {
    $_SESSION['session'] = 'valid';
    echo "<script>window.location.href = '/jedgeesmain/Homepage-Index.php'</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
