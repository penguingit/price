<?php
require "auth.php";
session_start();
header('Content-Type: text/html; charset= utf-8');

?>
<p><a href="index.php">Main Page</a> |  <a href="admin.php">Admin page</a></p>
<hr />
Welcome to Administration panel.<br />
<?php
include ('edit2.php');
?>
<a href="admin.php?do=logout">Logout</a>