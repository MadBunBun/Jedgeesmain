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

    

?>