<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['uid']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    session_destroy($_SESSION);
    header('location: ../login.php');
?>