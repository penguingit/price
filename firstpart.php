<?php
include ('config.php');
$link = mysqli_connect($dbhost, $dbuser, $dbpasswd, $dbname);
$query = mysqli_query($link,"select * from price");
if($query == false) {  die("Connection failed: " . $conn->connect_error);}

echo "<table align='center' border='0'><tr><th>Name</th><th>Cost</th><th>Del</th><th>Red</th><th>Name</th><th>Cost </th></tr>";
     while($row = mysqli_fetch_array($query)) /* Take all in array  */
    {  echo "<tr>
        <td bgcolor='#7fffd4'>{$row['1']}</td>
        <td bgcolor='#7fffd4'>{$row['2']}</td>
            <form method='post' action=''>
               <td bgcolor='red'> <input name='del' type='submit' value='X'> </td>
               <td bgcolor='aqua'> <input name='red' type='submit' value='V'> </td>
               <input name='id' type='hidden' value='". $row['0'] ."'> <!-- if you want to hide input just make it hidden =) --> 
                 <!-- You can change cols and rows -->
                <td><textarea name='namered' rows='3' cols='80'> ".$row['1']."</textarea></td>    
                <td><textarea name='costred' rows='3' cols='10'> ".$row['2']."</textarea></td>
            </form>
    </tr> ";
    };

    if ( isset ( $_POST['del'] )){
        $sql1 =mysqli_query ($link,"DELETE FROM `price` WHERE id='".$_POST['id']."'");   //delete from DB if choise X
        echo "<script>document.location.href='edit2.php';</script>";
                                 }
    elseif ( isset ( $_POST['red'] ))
    {//!!!!THIS IS OUT REQUEST TO DB!!!! I use variables $_POST['namered'] and $_POST['costred'] becouse I have 3 variables in DB with id(index), ofc.
    $sql2 =mysqli_query ($link,"UPDATE price SET name='". $_POST['namered']."', cost='".$_POST['costred']."' WHERE id='".$_POST['id']."'");
    if($sql2 == false){ echo "You shell not pass!";}
    else { $url = $_SERVER['REQUEST_URI']; echo "<script>location.href='".$url."'</script>";  /* Redirecting to the edit page dropping variables $_POST['del'] and/or $_POST['red']   */}
    }
echo "
<tr> <td height=5 bgcolor='#686461' colspan='9'> </td>
</tr><tr><td>";
?>