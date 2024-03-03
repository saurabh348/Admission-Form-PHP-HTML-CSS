<?php
    echo 'Logged out';
    session_start();
    unset($_SESSION['loggedin']);
    header('location:login.php');
?>
