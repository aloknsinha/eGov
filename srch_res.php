<?php
include("header.php");
include("config.php");
session_start();
			$srch_usr = $_POST['srch'];
            $search_user = "SELECT * from reg WHERE Username = '$srch_usr'";
            $result1 = mysqli_query($db,$search_user);
            $count = mysqli_num_rows($result1);     
            if($count > 0) 
            {
                  if (mysqli_num_rows($result1) > 0) 
				  {  
	    			while($row = mysqli_fetch_assoc($result1)) 
	    			{
			          $image = $row['image'];
			          $image_src = "upload/".$image;
			           //echo "<img src = $image_src>";	

			          echo "Name:-".$row["Name"]."<br>"."Phone:-".$row["Phone"]."<br>"."Username:-".$row["Username"]."<br>"."Email:-".$row["Email"]."<br>"."DOB:-".$row["DOB"]."<br>"."Sex:-".$row["Sex"]."<br>"."Image:-"."<img src = $image_src>";   //".Username:-".$row["username"].
			          echo "<br>";
			        }
  				  } 
			}
			else 
			{
    			echo "0 results";
			}
?>
<br><br><br><br><br><br><br><br>
<a href="admin_home.php">Admin
