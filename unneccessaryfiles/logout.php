<?php 
    session_start();

    $_SESSION['session'] = 'invalid';

    session_destroy();

   
?>

