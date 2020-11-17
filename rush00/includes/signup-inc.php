<?php


if (isset($_POST["submit"])) {
    require_once('db.php');
    require_once('functions.php');
    $login = trim($_POST['username']);
    $passwd = $_POST['passwd'];
    $email = trim($_POST['email']);
    $Rpasswd = $_POST['Rpasswd'];
    $name = trim($_POST['name']);
    emtySingupinput($login, $passwd, $email, $Rpasswd, $name);
    if ($rows = checkmatch($conn, $login, $email)) {
        if ($rows['usersUid'] === $login) {
            header('location: ../signup.php?error=loginm');
            exit();
        } elseif ($rows['usersEmail'] === $email) {
            header('location: ../signup.php?error=emailm');
            exit();
        }
    }
    matchpass($passwd, $Rpasswd);
    addtodb($conn, $login, $email, $passwd, $name);
} else
    header('location: ../signup.php');
