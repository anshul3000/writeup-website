<?php

session_start();
$id = (int)$_GET["id"];
$conn = mysqli_connect("localhost", "root", "1234", "writeup");
$sql = "DELETE FROM articles WHERE articleid=$id";
$res = mysqli_query($conn, $sql);
header("Location: admin-posts.php");

?>