<?php
    session_start();
    unset($_SESSION['uid']);
    session_destroy($_SESSION);
    header('location: ../login.php');
?>