<?php

session_start();

$uname = $_POST["admin-username"];
$password = $_POST["admin-password"];
$conn = mysqli_connect("localhost", "root", "1234", "writeup");

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM admins WHERE uname='$uname' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result))
{
    $_SESSION["name"] = $uname;
    header("Location: admin-home.php");
    exit();
}
else
{
    header("Location: admin-login.html");
    exit();
}
?>