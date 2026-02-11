<?php
$conn = mysqli_connect("localhost", "root", "", "study_point");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>