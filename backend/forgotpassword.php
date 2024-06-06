<?php
require('./backend/database.php');
function generateRandomCode($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Check if the email exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $code = generateRandomCode();
        // Here you would send the email with the code
        // For example, using an email sending service

        // For demonstration, we just display a message
        $message = 'A code is sent to your email. If not yet, click this <a href="#">link</a>';
    } else {
        $message = "Email doesn't exist";
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the form with a message
    header("Location: forgotpassword.html?message=" . urlencode($message));
    exit;
}
?>
