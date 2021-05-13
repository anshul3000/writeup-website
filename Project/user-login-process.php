<?php

session_start();

$emailid = $_POST["uemail"];
$password = $_POST["upass"];
$conn = mysqli_connect("localhost", "root", "1234", "writeup");

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE email='$emailid' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result))
{
    $row = mysqli_fetch_assoc($result);
    $_SESSION["name"] = $row["fname"];
    $_SESSION["fullname"] = $row["fname"] . ' ' . $row["lname"];
    $_SESSION["userid"] = $row["uid"];
    header("Location: user-home.php");
    exit();
}
else
{
    header("Location: user-login.html");
    exit();
}
?>