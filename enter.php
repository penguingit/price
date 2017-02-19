<?php
session_start();

if($_SESSION['admin']){
	header("Location: admin.php");
	exit;
}

$admin = 'admin';  //put here your user name, or leave it as admin
$pass = '098f6bcd4621d373cade4e832627b4f6';  //and here md5 hash. U can generate it with passgen.php , it's included.  
//right now $pass=test

if($_POST['submit']){
	if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
		$_SESSION['admin'] = $admin;
		header("Location: admin.php");
		exit;
	}else echo '<p>Incorrect Login or Password!</p>';
}
?>
<p><a href="index.php">Main page</a> |  <a href="admin.php">Admin page</a></p>
<hr />
This is Autorisation page.
<br />
<form method="post">
	Username: <input type="text" name="user" /><br />
	Password: <input type="password" name="pass" /><br />
	<input type="submit" name="submit" value="Enter" />
</form>