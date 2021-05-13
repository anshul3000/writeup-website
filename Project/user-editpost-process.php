<?php

session_start();

$id = $_SESSION["aid"];
$title = $_GET["newtitle"];
$content = $_GET["newcontent"];
$conn = mysqli_connect("localhost", "root", "1234", "writeup");
$sql = "UPDATE articles SET title='$title', content='$content' WHERE articleid=$id;";
$res = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Edit Post Status</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="navbar">
	<a href="user-home.php">Home</a>
	<a href="user-posts.php">Posts</a>
	<a href="user-myposts.php">My posts</a>
	<a href="user-write.php">Write</a>
	<a href="index.html" style="float: right;">Logout</a>
	<span class="afterlogin"><?php echo $_SESSION["name"];?></span>
</div>
<br /><br /><br /><br /><br />
<h1>Your post has been edited successfully!</h1>
</body>
</html>