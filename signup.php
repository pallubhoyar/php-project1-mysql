<?php
include 'config.php';
include 'navbar.php';

if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $contact = $_POST['contact'];

    $sql = "INSERT INTO users(username,email,password,contact)
            VALUES('$username','$email','$password','$contact')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Account Created Successfully');</script>";
    } else {
        echo "<script>alert('Error');</script>";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Sign Up</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="contact" placeholder="Contact" required>
        <button type="submit" name="signup">Create Account</button>
    </form>
    <div class="text-center">
        Already have an account? <a href="login.php">Login</a>
    </div>
</div>