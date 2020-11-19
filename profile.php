<?php
session_start();
include_once 'header.php'
?>

<!-- <form id="za" method="POST" action="profile.php">
    echo '<input id="barb" type="submit" name="profile" value="Profile" /></form>
echo '<form id="za" method="POST" action="./includes/logout-inc.php">
    echo '<input id="barb" type="submit" name="logout" value="Log out" /></form>
<form id="za" method="POST" action="index.php">
    <input id="barb" type="submit" name="About us" value="About us" /></form>
  -->
  
  <div id="flex-con">
      <div id="leftbar">
          <a href="./profile.php"><img id="lofgo" src="./img/weedlogo.png" /></a>
        </div>
        <div id="pr">
            <section>
                </br>
                <img src="https://picsum.photos/200/300">
                <h2> WELCOME <?php echo  $_SESSION['name'] ?> You want some Weed ?</h2>
            </section> 
             <a href="?show=on">
            <input id="button" type="submit" name="submit" value="Sign Up" />
            </a>

    </div>
</div>
</body>

</html>