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
            include_once './includes/errors.php'
        ?>

    </form>
</section>
</body>

</html>