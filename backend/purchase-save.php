<?php
require('./database.php');
require('./fpdf186/fpdf.php');
require ('vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


session_start();

$session_print = $_SESSION['type_print'];
$billing_id = $_SESSION['billing_id'];
function pdf_print_custom($billing_id) {
    require('./database.php');
    

    $query = "SELECT * FROM print_customization WHERE billing_id='$billing_id'";
    $result = mysqli_query($conn, $query);

    if($result) {
        $row = mysqli_fetch_assoc($result);
        $billing_id = $row['billing_id'];
        $paper = $row['type_paper'];
        $color = $row['color'];
        $size = $row['size'];
        $pages = $row['num_pages'];
        $type_bind = $row['bind'];
        $pages_price = $row['pages_price'];
        $bind_price = $row['bind_price'];
        $total = $row['total'];     
        $down_payment = $row['down_payment'];
        $instructions = $row['instructions'];

    }

    $pdf = new FPDF();
    $pdf->AddPage();

    // Title (header)
    $pdf->SetFont('times','B',16);
    $pdf->Cell(0,10,'Acknowledgment Receipt',0,1,'C');
    $pdf->Ln(10); // Line break

    // Print details
    $pdf->SetFont('times','',12);
    $pdf->Cell(50,10,'Billing ID: '.$billing_id);
    $pdf->Ln();
    $pdf->Cell(50,10,'Type of Paper: '.$paper);
    $pdf->Ln();
    $pdf->Cell(50,10,'Type of Print: '.$color);
    $pdf->Ln();
    $pdf->Cell(50,10,'Size: '.$size);
    $pdf->Ln();
    $pdf->Cell(50,10,'Number of Pages: '.$pages);
    $pdf->Ln();
    $pdf->Cell(50,10,'Type of Bind: '.$type_bind);
    $pdf->Ln();
    $pdf->Cell(50,10,'Pages Price: '.number_format($pages_price, 2));
    $pdf->Ln();
    $pdf->Cell(50,10,'Bind Price: '.number_format($bind_price, 2));
    $pdf->Ln(); 
    $pdf->Cell(50,10,'Instructions: '.$instructions);
    $pdf->Ln(); 
    $pdf->Cell(50,10,'Total: '.number_format($total, 2));
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Cell(50,10,'Down Payment (Paid): P'.number_format($down_payment, 2));

    $file_path = "../uploads/receipt/receipt_print_$billing_id.pdf";

    $pdf->Output('F', $file_path);

    return $file_path;

}

function pdf_taurp_custom($billing_id) {
    require('./database.php');

    $query = "SELECT * FROM taurp_customization WHERE billing_id='$billing_id'";
    $result = mysqli_query($conn, $query);

    if($result) {
        $row = mysqli_fetch_assoc($result);

        $billing_id = $row['billing_id'];
        $feet_1 = $row['feet_1'];
        $feet_2 = $row['feet_2'];
        $copies = $row['copies'];
        $with_layout = $row['with_layout'];
        $taurp_price = number_format($row['taurp_price'], 2);
        $copies_price = number_format($row['copies_price'], 2);
        $layout_price = number_format($row['layout_price'], 2);
        $total_price = number_format($row['total_price'], 2);
        $down_payment = number_format($row['down_payment'], 2);
        $instructions = $row['instructions'];

        $display_value = $with_layout === 'No' ? 'none' : 'block';
    }

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Times', 'B', 16);
    $pdf->Cell(0, 10, 'Acknowledgment Receipt', 0, 1, 'C');
    $pdf->Ln(10); 

    $pdf->SetFont('Times', '', 12);
    $pdf->Cell(50,10,'Billing ID: '.$billing_id);
    $pdf->Ln();
    $pdf->Cell(50, 10, 'Size of Taurpalin: ' . $feet_1 . 'x' . $feet_2);
    $pdf->Ln();
    $pdf->Cell(50, 10, 'Number of Copies: ' . $copies);
    $pdf->Ln();
    $pdf->Cell(50, 10, 'With Layout: ' . $with_layout);
    $pdf->Ln();
    if ($display_value === 'block') {
        $pdf->Cell(50, 10, 'Layout Price: ' . $layout_price);
        $pdf->Ln();
    }
    $pdf->Cell(50, 10, 'Taurpalin Price: ' . $taurp_price);
    $pdf->Ln();
    $pdf->Cell(50, 10, 'Copies Price: ' . $copies_price);
    $pdf->Ln();
    $pdf->Cell(50, 10, 'Instructions: ' . $instructions);
    $pdf->Ln();
    $pdf->Cell(50, 10, 'Total: ' . $total_price);
    $pdf->Ln(); 
    $pdf->Ln(); 
    $pdf->Cell(50,10,'Down Payment (Paid): P'.$down_payment);

    $file_path = "../uploads/receipt/receipt_taurp_$billing_id.pdf";
    $pdf->Output('F', $file_path);

    
    return $file_path;
}

function email_sending($file_path, $billing_id) {
    require('./database.php');
    $email = $_SESSION['username'];
    $id = intval($_SESSION['user_id']);
    
    $query = "SELECT * FROM user_credentials WHERE id = $id AND username = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $fname = $row['fname'];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP(); 
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;
            $mail->Username   = 'jedgeesprintingservices@gmail.com';                     
            $mail->Password   = 'xzuk hzcp dfdn xgtp';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          
            $mail->Port       = 587;                                    

            $mail->setFrom('jedgeesprintingservices@gmail.com', 'Jedgees Printing Services');
            $mail->addAddress($email);  
            
            if (file_exists($file_path)) {
                $mail->addAttachment($file_path);
            } else {
                throw new Exception('File not found.');
            }
            
            
            $mail->isHTML(true);                                  
            $mail->Subject = "Acknowledgment Receipt - $billing_id";
            $email_template = "
                <h1>Hey {$fname}!</h1>
                <p>Your Acknowledgement Receipt is attached below. Pay the remaining in pick up.</p>
                <br><br>
                <p>Thanks,</p>
                <p>Jedgees Printing Services</p>
            ";
            $mail->Body = $email_template;

            $mail->send();
            echo "Message has been sent successfully.";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "User not found or query failed.";
    }
}


if ($session_print === 'print_customization') {

    if (isset($_POST['submit-purchase'])) {
        $amount = floatval($_POST['amount']);
        $referral = $_POST['referral'];
        $billing_id = $_SESSION['billing_id'];
        $targetDir = "../uploads/screenshot/";
    
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $fileName = basename($_FILES["file"]["name"]);
            $targetPath = $targetDir.$fileName;
    
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
                $pdfPath = pdf_print_custom($billing_id);
                $query = "INSERT INTO purchase (billing_id, paid_amount, total, referral, image_name, image_path, pdfpath, from_where)
                VALUES ('$billing_id', $amount, $amount*2 , '$referral', '$fileName', '$targetPath', '$pdfPath', '$session_print')"; 
    
                if (mysqli_query($conn, $query)) {
                    email_sending($pdfPath, $billing_id);
                    header("Location: ../Customize-index.php");
                    echo "<script>console.log('File Successfully Saved to DB');</script>";
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
            echo "<script>console.log('Files not uploaded successfully');</script>";
        }
    
    }
} 
else if ($session_print === 'taurp_customization') {

    if (isset($_POST['submit-purchase'])) {
        $amount = floatval($_POST['amount']);
        $referral = $_POST['referral'];
        $billing_id = $_SESSION['billing_id'];
        $targetDir = "../uploads/screenshot/";
    
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $fileName = basename($_FILES["file"]["name"]);
            $targetPath = $targetDir.$fileName;
    
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
                $pdfPath = pdf_taurp_custom($billing_id);
                $query = "INSERT INTO purchase (billing_id, paid_amount, total, referral, image_name, image_path, pdfpath, from_where)
                VALUES ('$billing_id', $amount, $amount*2, '$referral', '$fileName', '$targetPath', '$pdfPath', '$session_print')"; 
    
                if (mysqli_query($conn, $query)) {
                    email_sending($pdfPath, $billing_id);
                    header("Location: ../Customize-index.php");
                    echo "<script>console.log('File Successfully Saved to DB');</script>";
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
            echo "<script>console.log('Files not uploaded successfully');</script>";
        }
    
    }
} 





?>