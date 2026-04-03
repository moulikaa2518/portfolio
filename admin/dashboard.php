<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
?>

<h2>Dashboard</h2>

<a href="add_project.php">Add Project</a>