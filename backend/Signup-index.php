<?php
require('./session.php');
require('./database.php');
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$query = "INSERT INTO user_credentials (id, username, password, name, phonenumber, address) VALUES (null, '$email', md5('$password'), '$name', '$phoneNumber', '$address')";
if (mysqli_query($conn, $query)) {
    $_SESSION['session'] = 'valid';
    echo "<script>window.location.href = '/jedgeesmain/Homepage-Index.php'</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>
