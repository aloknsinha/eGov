<?php

$db = mysqli_connect('localhost', 'root', 'passwd@123', 'alokx');
if (!$db) 
{
    die("Connection failed: " . mysqli_connect_error());
}
session_start();

      $sql = "create database rough;";

      //$sql = "insert into admin values('$Name','$Email','$Phone','$Username','$Password');";
      $result = mysqli_query($db,$sql); 
      echo "Database is created.";
      //header("location: loginn.php");

?>

