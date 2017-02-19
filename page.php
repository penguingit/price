<?php
header('Content-Type: text/html; charset= utf-8');
?>

<html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>My price</title>
    <link rel="stylesheet" type="text/css" href="tables.css">
</head>
<body>

<?php
include ('config.php');

# Connect to DB
$link = mysqli_connect($dbhost, $dbuser, $dbpasswd, $dbname);

$select= mysqli_query($link, 'SELECT * FROM `price`') or die("ERROR: ".mysqli_error($link));

//records output
echo '<table cellpadding="0" cellspacing="0" class="tableschem">';
echo '<br> 
 <tbody>
  <tr>
 	  <th colspan="4">
         Here is title for your table <br>
	  </th>
  </tr>
  <tr>
	<td>
	</td>
	<td colspan="2">
 <b> Name</b>
	</td>
	<td>
 <b>
		Cost<br>
		 &nbsp;( USD. )</b>
	</td>
</tr>';
// detach table from header
echo '
<tr>
	<td>
	</td>
	<td colspan="2">
		 &nbsp;
	</td>
	<td>
	</td>
</tr>
  ';
// go go go our data is here!
while($r = mysqli_fetch_assoc($select)) {
    echo "<tr> <td>	</td> <td colspan='2'>" . $r['name'];
    echo "<br>";
    echo " </td>";
    echo "<td>" . $r['cost'] . "</td></tr>";
                                        } //end of while()
echo "</tbody></table>";

mysqli_close($link);   //don't forget to close DB!

?>
</body>
</html>
