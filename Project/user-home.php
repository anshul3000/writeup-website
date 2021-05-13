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
	<a href="user-posts.php">Posts</a>
	<a href="user-myposts.php">My posts</a>
	<a href="user-write.php">Write</a>
	<a href="index.html" style="float: right;">Logout</a>
	<span class="afterlogin"><?php echo $_SESSION["name"]; ?></span>
</div>
<br /><br /><br /><br /><br />
<p class="introduction">
    “ You don’t start out writing good stuff. You start out writing crap and thinking it’s good stuff, and then gradually you get better at it.
    <br />
    <br />
    That’s why I say one of the most valuable traits is persistence. ”
    <br />
    <br />
    ― Octavia E. Butler  
</p>
<div class="images1">
    <a href="user-posts.php"><img src="posts.png" alt="View posts"/></a>
    <span>See what the world writes here!</span>
</div>
    <div class="images1">
    <a href="user-myposts.php"><img src="my-posts.png" alt="View posts"/></a>
    <span>View/Edit/Remove your post</span>
</div>
<div class="images1">
    <a href="user-write.php"><img src="write-post.png" alt="View posts"/></a>
    <span>Write about something!</span>
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
