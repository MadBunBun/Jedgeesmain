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

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format";
    } else {
        // Check if the email exists
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $code = generateRandomCode();
            // Here you would send the email with the code
            // For example, using an email sending service like PHPMailer
            // mail($email, "Your Recovery Code", "Here is your recovery code: $code");

            // For demonstration, we just display a message
            $message = 'A code is sent to your email. If not yet, click this <a href="#">link</a>';
        } else {
            $message = "Email doesn't exist";
        }
        $stmt->close();
    }
    $conn->close();
}
if (isset($message)) {
    echo '<div id="message">' . htmlspecialchars($message) . '</div>';
}
?>
