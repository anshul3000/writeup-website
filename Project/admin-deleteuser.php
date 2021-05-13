<?php

session_start();
$id = (int)$_GET["id"];
$conn = mysqli_connect("localhost", "root", "1234", "writeup");
$sql = "DELETE FROM users WHERE uid=$id";
$res = mysqli_query($conn, $sql);
header("Location: admin-users.php");
?>