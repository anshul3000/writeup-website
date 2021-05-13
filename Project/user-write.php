<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Write</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="navbar">
	<a href="user-home.php">Home</a>
	<a href="user-posts.php">Posts</a>
	<a href="user-myposts.php">My posts</a>
	<a href="index.html" style="float: right;">Logout</a>
	<span class="afterlogin"><?php session_start(); echo $_SESSION["name"];?></span>
</div>
<br /><br />
<h1>Write something:</h1>
<div class="forms1">
	<form action="user-write-process.php" method="get" class="writeform" id="write_form">
		<input type="text" placeholder="Title" name="utitle" id="title_u" />
		<br />
		<br />
		<br />
		<textarea form="write_form" rows="10" placeholder="Write here..." name="ucontent" id="content_u"></textarea>
		<br />
		<br />
		<br />
		<input type="submit" class="postbutton" value="Post" />
	</form>
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
