<?php
$username = $_POST['username'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$connection = mysqli_connect('localhost', 'root', '', 'project');
$insert_query = "INSERT INTO `comments`(`username`, `email`, `comment`) VALUES ('".$username."', '".$email."', '".$comment."')";
mysqli_query($connection, $insert_query);
mysqli_close($connection);

header("Location: contacts.php");