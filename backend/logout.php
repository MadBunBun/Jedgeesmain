<?php 
    session_start();

    $_SESSION['session'] = 'invalid';

    session_destroy();

    echo "<script>window.location.href = '/jedgeesmain/Homepage-Index-offline.php'</script>";
?>

