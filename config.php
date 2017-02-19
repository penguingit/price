<?php
$dbhost="localhost";  //sometimes U need to put here your sitename.
$dbuser="my_db_usr"; 
$dbpasswd="test"; //your DB password
$dbname="my_db_name"; //name of your DB

//Make a connection to DB
$dbcnx=mysqli_connect($dbhost, $dbuser, $dbpasswd, $dbname);

if (!$dbcnx) // if == 0 - something wrong!
{
    echo("<p>Right now your DataBase Server is not avaible.</p>");
    exit();
}

if (!@mysqli_select_db($dbcnx, $dbname))
{
    echo( "<p>Rigth now your DataBase is no avaible.</p>" );
    exit();
}
?>