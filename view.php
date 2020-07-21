<?php

include("header.php");
include("config.php");
session_start();
  $sql = "select * from reg";
  $result = mysqli_query($db,$sql); 
  if (mysqli_num_rows($result) > 0) 
	 {  
    	while($row = mysqli_fetch_assoc($result)) 
    	{
          $image = $row['image'];
          $image_src = "upload/".$image;
           //echo "<img src = $image_src>";	

          echo "Name:-".$row["Name"]."<br>"."Phone:-".$row["Phone"]."<br>"."Username:-".$row["Username"]."<br>"."Email:-".$row["Email"]."<br>"."DOB:-".$row["DOB"]."<br>"."Sex:-".$row["Sex"]."<br>"."Image:-"."<img src = $image_src>";   //".Username:-".$row["username"].
       }   
	 } 
	else 
	{
    	echo "0 results";
	}
?>

