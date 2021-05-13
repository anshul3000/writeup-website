<?php

$fname = $_POST["reg-fname"];
$lname = $_POST["reg-lname"];
$email = $_POST["reg-email"];
$password = $_POST["reg-pass"];

$conn = mysqli_connect("localhost", "root", "1234", "writeup");
$sql = "INSERT INTO USERS(fname, lname, email, password) VALUE ('$fname', '$lname', '$email', '$password');";
$run = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration Status</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="navbar">
	<a href="index.html">Home</a>
	<a href="posts.php">Posts</a>
	<a href="admin-login.html" style="float: right;">Admin-Login</a>
	<a href="user-login.html" style="float: right;">Login</a>
</div>
<br /><br /><br /><br /><br />
<h1>Welcome <?php echo $fname; ?></h1>
<h1>Please login to continue!</h1>

<footer style="position: absolute; bottom: 0;">
    <div class="copyright">&copy; 2021</div>
    <div class="authorname">Anshul Kothari</div>
    <div class="authorcontact">
        <a href="https://instagram.com/kotharianshul03?igshid=1o4cr3dr50di2" target="_blank"><img src="insta.png" alt="" class="i111"/></a>
        <a href="https://www.linkedin.com/in/anshul-kothari-14bb721a3/" target="_blank"><img src="linkedin.png" alt="" class="i111"/></a>
        <a href="https://github.com/anshul3000" target="_blank"><img src="github.png" alt="" class="i222"/></a>
    </div>
</footer>
</body>
</html>