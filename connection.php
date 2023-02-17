<?php
// mysqli function is used to connect php with database
$host="localhost:3306";
$user="root";
$password="";
$database="portfolio";
$con=mysqli_connect($host,$user,$password,$database);

if(!$con)
{
    die('could not connect'.mysql_error());
}
?>