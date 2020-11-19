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
        } elseif ($_GET['error'] === 'fixemail') {
        ?>
            <h3 style="color:red; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Email format user@email.xyz *</h3>
        <?php
        } ?>