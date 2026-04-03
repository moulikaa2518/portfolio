<?php
$conn = mysqli_connect("localhost", "root", "", "portfolio");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>