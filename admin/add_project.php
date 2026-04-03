<?php
include('../includes/config.php');

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $link = $_POST['link'];

    $img = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/".$img);

    mysqli_query($conn, "INSERT INTO projects(title,description,image,link)
    VALUES('$title','$desc','$img','$link')");

    echo "Project Added!";
}
?>

<form method="POST" enctype="multipart/form-data">
    <input name="title" placeholder="Title"><br>
    <textarea name="description"></textarea><br>
    <input name="link" placeholder="Project Link"><br>
    <input type="file" name="image"><br>
    <button name="submit">Add</button>
</form>