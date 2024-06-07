<?php
require('./backend/database.php');

session_start();

if ($_SESSION['session'] == 'invalid' || empty($_SESSION['session'])){
    $_SESSION['session'] = 'invalid';

    echo "<script>window.location.href = '/jedgeesmain/Homepage-Index.php'</script>";
}

unset($_SESSION['billing_id']);
unset($_SESSION['type_print']);

?>