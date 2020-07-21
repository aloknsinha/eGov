<?php
include("imgdb.php");
session_start();

$sql = "select image from image";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) 
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$image = $row['image'];
			$image_src = "upload/".$image;
			echo "<img src = $image_src>";
		}
	}
?>




