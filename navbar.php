<?php
session_start();
?>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>

    <?php if(isset($_SESSION['username'])){ ?>
        <a href="welcome.php">Welcome</a>
        <a href="logout.php">Logout</a>
    <?php } else { ?>
        <a href="login.php">Login</a>
        <a href="signup.php">SignUp</a>
    <?php } ?>
</nav>