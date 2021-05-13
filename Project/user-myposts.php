<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Posts</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="navbar">
	<a href="user-home.php">Home</a>
	<a href="user-posts.php">Posts</a>
	<a href="user-write.php">Write</a>
	<a href="index.html" style="float: right;">Logout</a>
	<span class="afterlogin"><?php echo $_SESSION["name"]; ?></span>
</div>

<?php
$conn = mysqli_connect("localhost", "root", "1234", "writeup");
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
$userid = (int)$_SESSION["userid"];
$sql = "SELECT * FROM articles where authorid=$userid";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
      ?>
      <div class="articles">
      <div class="adate">Created on: <?php echo $row["createdon"]; ?> </div>
      <div class="atitle">Title: <?php echo $row["title"]; ?> </div>
      <div class="acontent"><?php echo $row["content"]; ?> </div>
      <br />
      <div style="overflow: hidden; float: right; padding-left: 1%;">
		<form action="user-deletepost.php" method="get">
			<input style="display: none;" value="<?php echo $row["articleid"]; ?>" name="id"/>
			<button type="submit" class="removebtn">Remove post</button>
		</form>
      </div>
      <div style="overflow: hidden; float: right;">
		<form action="user-editpost.php" method="get">
			<input style="display: none;" value="<?php echo $row["articleid"]; ?>" name="id"/>
			<button type="submit" class="removebtn">Edit post</button>
		</form>
      </div>
      </div>
      <?php
  }
} 
else 
{
  echo "<h1><br /><br />No results found</h1>";
}
mysqli_close($conn);
?>
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