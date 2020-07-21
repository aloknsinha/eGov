<?php

$db = mysqli_connect('localhost', 'root', 'passwd@123', 'alokx');
if (!$db) 
{
    die("Connection failed: " . mysqli_connect_error());
}
session_start();

      $sql1 ="select * from alok";
      $result1 = mysqli_query($db,$sql1);
      $count = mysqli_num_rows($result1);    	
      if($count == 1) 
      {
         echo "Table is allready created.";  
      }
      else
      {
      		$sql = "create table rough(Name varchar(30));";
      $result = mysqli_query($db,$sql); 
      echo "Table is created.";
      
      }

?>

