<?php
include 'navbar.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>
        Hello <?php echo $_SESSION['username']; ?>! <br>
        Welcome to Study Point
    </h2>
</div>