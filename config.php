<?php
   //define('DB_SERVER', 'localhost:3306');
   //define('DB_USERNAME', 'root');
   //define('DB_PASSWORD', 'passwd@123');
   //define('DB_DATABASE', 'alokx');
   //$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$servername = "localhost";
$username = "root";
$password = "passwd@123";
$dbname = "egov";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$db) 
{
    die("Connection failed: " . mysqli_connect_error());
}
?>