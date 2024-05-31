<?php 
require('./database.php');

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

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
                $query = "INSERT INTO print_customization (type_paper, color, size, num_pages, docu, docu_filepath, bind, instructions, pages_price, bind_price, total)
                VALUES ('$paper', '$color', '$size', $pages, '$fileName', '$targetPath', '$bind', '$instructions', $totalpages, $bindprice, $total)";

                if (mysqli_query($conn, $query)) {
                    header("Location: ./Customize-index.php");
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

            if (move_uploaded_file($_FILES["file-taurp"]["tmp_name"], $targetPath)) {
                $query = "INSERT INTO taurp_customization (feet_1, feet_2, copies, with_layout, instructions, taurp_price, copies_price, layout_price, total_price, file_name, file_path)
                VALUES ($feet_1, $feet_2, $copies_taurp, '$layout', '$instructions', $taurp_price, $copies_price, $layout_price, $total_price, '$fileName', '$targetPath')";

                if (mysqli_query($conn, $query)) {
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

    

?>