<?php
require ('database.php');
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function generateRandomCode($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateToken($length = 32) {
    $randomBytes = random_bytes($length);
    
    $token = bin2hex($randomBytes);
    
    return $token;
}

function send_pass_reset($get_name, $get_email){
    try {
      $mail = new PHPMailer(true);
      $mail->isSMTP(); 
      $mail->Host       = 'smtp.gmail.com';                     
      $mail->SMTPAuth   = true;
      $mail->Username   = 'jedgeesprintingservices@gmail.com';                     
      $mail->Password   = 'xzuk hzcp dfdn xgtp';                               
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          
      $mail->Port       = 587;                                    
   
      $mail->setFrom('jedgeesprintingservices@gmail.com', 'Jedgees Printing Services');
      $mail->addAddress($get_email);  
      $mail->isHTML(true);
      $mail->Subject = "Reset Password Notification";
   
      $email_template = "
                        <p>$get_name, We recieved a password reset to your account.</p>
                        <br><br>
                        <a href='http://localhost/jedgeesmain/changepassword.php'>Recovery Link</a>
                        <br><br>
                        <p>Thanks,</p>
                        <p>Jedgees Printing Services</p>
      ";
   
      $mail->Body = $email_template;
      $mail->send();
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }







?>