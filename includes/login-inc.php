<?php

if (isset($_POST["submit"])) {
    require_once('db.php');
    require_once('functions.php');
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    emtyinput($login, $passwd);
    if ($row = checkmatch($conn, $login, $login)) {
        if (!password_verify($passwd, $row['userspwd'])) {
            header('location: ../login.php?error=notexist');
            exit();
        } else
        {
            $u = $row['usersUid'];
            $e = $row['usersEmail'];
            $n = $row['usersName'];
            session_start();
            $_SESSION['id'] = $row['usersId'];
            $_SESSION['uid'] = $u;
            $_SESSION['name'] = $n;
            $_SESSION['email'] = $e;
            header('location: ../profile.php');
            return;
        }
    } else {

        header('location: ../login.php?error=notexist');
        exit();
    }
} else
    header('location: ../login.php');
