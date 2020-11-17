<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body id="home">

    <div id="bar">
        <img id="logo" src="./img/weedlogo.png" />
        <?php
            if(isset($_SESSION['uid']))
            {
                echo '<form id ="za" method="POST" action="profile.php">';
                echo '<input id="barb" type="submit" name="profile" value="Profile"/></form>';
                echo '<form id ="za" method="POST" action="./includes/logout-inc.php">';
                echo '<input id="barb" type="submit" name="logout" value="Log out"/></form>';
                echo '<form id ="za" method="POST" action="non.php">';
                echo '<input id="barb" type="submit" name="About us" value="About us"/></form>';
            }
            else
            {
                echo '<form id ="za" method="POST" action="signup.php">';
                echo '<input id="barb" type="submit" name="sign" value="Sign up"/></form>';
                echo '<form id ="za" method="POST" action="login.php">';
                echo '<input id="barb" type="submit" name="login" value="Log in"/></form>';
                echo '<form id ="za" method="POST" action="non.php">';
                echo '<input id="barb" type="submit" name="About us" value="About us"/></form>';
            }

        ?>
</div>
