<?php
include ('config.php');

Echo "<form action='' method='post'><table>
<tr><th></th><th>Name</th><th>Cost</th><th>Type</th><th></th></tr>

<tr> <td bgcolor='#7fffd4'>{$row['0']}</td>
     <td><textarea name='name' rows='3' cols='80' required></textarea> </td>
     <td><textarea name='cost' rows='3' cols='10' required ></textarea> </td>
     <td>
<input type='submit' value=' Add new record ' name='addsubmit'/><br />
</form>
</div>
";

if(isset($_POST["addsubmit"])){
    include ('config.php');
// Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//Add to database
    $sql = "INSERT INTO price (id, name, cost)
//use NUll for autoincriment
    VALUES (NULL,'".$_POST["name"]."','".$_POST["cost"]."')";

    if ($conn->query($sql) === TRUE) {
//if U want you can uncomment next line and have allert message.

     //   echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
        echo "<script>document.location.href='edit2.php';</script>";
    } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }

    $conn->close();
}
echo "</td>
</tr>
";



echo '</table>';
?>