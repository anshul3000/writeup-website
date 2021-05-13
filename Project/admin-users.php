<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="navbar">
	<a href="admin-home.php">Home</a>
	<a href="admin-posts.php">Posts</a>
	<a href="index.html" style="float: right;">Logout</a>
	<span class="afterlogin"><?php echo $_SESSION["name"]; ?></span>
</div>
<table id="user-table">
<tr class="ttdd">
    <td><b>User ID</b></td>
    <td><b>First-name</b></td>
    <td><b>Last-name</b></td>
    <td><b>Email-ID</b></td>
    <td>&nbsp;</td>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "1234", "writeup");
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {?>
    <tr class="ttdd">
	<td><?php echo $row["uid"]; ?></td>
	<td><?php echo $row["fname"]; ?></td>
	<td><?php echo $row["lname"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td>
		<form action="admin-deleteuser.php" method="get">
			<input style="display: none;" value="<?php echo $row["uid"]; ?>" name="id"/>
			<button type="submit" class="removeuserbtn">Remove user</button>
		</form>
	</td>
    </tr>
      <?php
  }
} 
else 
{
  echo "No results found";
}

mysqli_close($conn);
?>
</table>
<br /><br />
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