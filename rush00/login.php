<?php
include_once 'header.php'
?>

<section>
    <form id="login" method="POST" action="includes/login-inc.php">
        <h2>
            Identification
        </h2>
        <input type="text" name="login" placeholder="Enter login ..." />
        </br>
        <h2>
            Mot de passe
        </h2>
        <input type="password" name="passwd" placeholder="Enter password ..." />
        </br>
        <input id="button" type="submit" name="submit" value="OK" />
        <?php
        if ($_GET['error'] === 'login') {
        ?>
            <h3 style="color:red;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter Login *</h3>
        <?php
        } elseif ($_GET['error'] === 'pwd') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter password *</h3>
        <?php
        } elseif ($_GET['error'] === 'loginpwd') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter login *</h3>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter password *</h3>
        <?php
        } elseif ($_GET['error'] === 'notexist') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">login or Password Incorrect</h3>
        <?php
        } ?>
    </form>
</section>
</body>

</html>