<?php
include 'config.php';
include 'navbar.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password,$row['password'])){
            $_SESSION['username'] = $row['username'];
            header("Location: welcome.php");
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('User Not Found');</script>";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
    <div class="text-center">
        Don't have an account? <a href="signup.php">Sign Up</a>
    </div>
</div>