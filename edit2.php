<?php

if($_GET['do'] == 'logout'){
unset($_SESSION['admin']);
session_destroy(); }

include ('firstpart.php');
include ('dbadd.php');

Echo"</td></tr></table>
";

echo'
<br><br><a href="admin.php?do=logout">Logout.</a>
';
exit;


?>

