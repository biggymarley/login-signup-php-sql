<?php
include_once 'header.php'
?>

<section>
    <form id="login" method="POST" action="includes/signup-inc.php">
        <h2>
            Name
        </h2>
        <input type="text" name="name" placeholder="Enter your Name ..." />
        </br>
        <h2>
            UserName
        </h2>
        <input type="text" name="username" placeholder="Enter your Username ..." />
        </br>
        <h2>
            Password
        </h2>
        <input type="password" name="passwd" placeholder="Enter your Password ..." />
        </br>
        <h2>
            Repeat Password
        </h2>
        <input type="password" name="Rpasswd" placeholder="Repeat your Password ..." />
        </br>
        <h2>
            Email
        </h2>
        <input type="text" name="email" placeholder="Enter your Email..." />
        </br>
        <input id="button" type="submit" name="submit" value="Sign Up" />
        <?php
        if ($_GET['error'] === 'login') {
        ?>
            <h3 style="color:red;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter UserName *</h3>
        <?php
        } elseif ($_GET['error'] === 'pwd') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter Password *</h3>
        <?php
        } elseif ($_GET['error'] === 'Rpwd') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter Repeat Password *</h3>
        <?php
        } elseif ($_GET['error'] === 'loginm') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">UserName already Taken</h3>
        <?php
        } elseif ($_GET['error'] === 'emailm') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Email already Taken</h3>
        <?php
        } elseif ($_GET['error'] === 'email') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter your Email *</h3>
            <?php
        } elseif ($_GET['error'] === 'name') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Enter your Name *</h3>
            <?php
        } elseif ($_GET['error'] === 'pwdnomatch') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Passwords not matched *</h3>
        <?php
        } ?>
        
    </form>
</section>
</body>

</html>