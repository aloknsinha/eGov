<?php
include("header.php");
include("config.php");
session_start();
$table = mysql_query("select * from pro_edit;");

if($table !== true)
{
   //echo("There is no table name pro_edit");
	$sql = "create table pro_edit(ID varchar(8),Father_Name varchar(30),Mother_Name varchar(30),Parents_Contact BIGINT,Aadhar_No BIGINT NOT NULL,Vill varchar(30),City varchar(30),Distric varchar(30),State varchar(30),Pin_code INT NOT NULL,primary key(ID));";
    $result = mysqli_query($db,$sql);
    //$count = mysqli_num_rows($result);  
}
else
{
	echo("This table exists");   
}


?>
<html>
   <body>
   	<link rel="stylesheet" type="text/css" href=".css">
      <a href ="logout.php">Sign out</a>
   </body>
</html>