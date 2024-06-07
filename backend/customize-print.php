<?php 
require('./database.php');

session_start();
unset($_SESSION['billing_id']);
$n=10;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

    if (isset($_POST['submit_print'])){
        $paper = $_POST['papertype'];
        $color = $_POST['typecolor'];
        $size = $_POST['size'];
        $pages = intval($_POST['numpage']);
        $bind = $_POST['bind'];
        $instructions = $_POST['instructions'];
        $bindprice = floatval($_POST['bindprice']);
        $totalpages = floatval($_POST['totalpages']);
        $total = floatval($_POST['total']);

        $targetDir = "../uploads/";

        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $fileName = basename($_FILES["file"]["name"]);
            $targetPath = $targetDir.$fileName;
            $billing_id = getName($n);

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
                $query = "INSERT INTO print_customization (billing_id, type_paper, color, size, num_pages, docu, docu_filepath, bind, instructions, pages_price, bind_price, total, down_payment)
                VALUES ('$billing_id', '$paper', '$color', '$size', $pages, '$fileName', '$targetPath', '$bind', '$instructions', $totalpages, $bindprice, $total, $total/2)";

                if (mysqli_query($conn, $query)) {
                    $_SESSION['type_print'] = "print_customization";
                    $_SESSION['billing_id'] = $billing_id;
                    header("Location: ../Purchase.php");
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

    if (isset($_POST['submit_taurp'])) {
        $feet_1 = intval($_POST['size-ft1']);
        $feet_2 = intval($_POST['size-ft2']);
        $copies_taurp = intval($_POST['numcopies_taurp']);
        $layout = $_POST['edit'];
        $instructions = $_POST['instructions-taurp'];

        $taurp_price = floatval($_POST['taurp-price']);
        $copies_price = floatval($_POST['copies-price']);
        $layout_price = floatval($_POST['layout-price']);

        $total_price = floatval($_POST['total-price']);

        $targetDir = "../uploads/";

        
        if (isset($_FILES['file-taurp']) && $_FILES['file-taurp']['error'] == 0) {
            $fileName = basename($_FILES["file-taurp"]["name"]);
            $targetPath = $targetDir.$fileName;
            $billing_id = getName($n);

            if (move_uploaded_file($_FILES["file-taurp"]["tmp_name"], $targetPath)) {
                $query = "INSERT INTO taurp_customization (billing_id, feet_1, feet_2, copies, with_layout, instructions, taurp_price, copies_price, layout_price, total_price, down_payment, file_name, file_path)
                VALUES ('$billing_id', $feet_1, $feet_2, $copies_taurp, '$layout', '$instructions', $taurp_price, $copies_price, $layout_price, $total_price, $total_price/2, '$fileName', '$targetPath')";

                if (mysqli_query($conn, $query)) {
                    $_SESSION['type_print'] = "taurp_customization";
                    $_SESSION['billing_id'] = $billing_id;
                    header("Location: ../Purchase.php");
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

    

?>