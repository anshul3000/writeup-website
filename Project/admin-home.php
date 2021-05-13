<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Write-up!</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="navbar">
	<a href="admin-posts.php">Posts</a>
	<a href="admin-users.php">Show All Users</a>
	<a href="index.html" style="float: right;">Logout</a>
	<span class="afterlogin"><?php echo $_SESSION["name"]; ?></span>
</div>
<br /><br />
<h1>Administrator Panel</h1>
<br /><br />
<div class="images1">
    <a href="admin-posts.php"><img src="posts.png" alt="View posts"/></a>
    <span>View/Remove any post</span>
</div>
<div class="images1">
    <a href="admin-users.php"><img src="all-users.png" alt="View posts"/></a>
    <span>View/Remove any user</span>
</div>
<footer>
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