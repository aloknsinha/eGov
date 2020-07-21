<?php
include("imgdb.php");
session_start();

if(isset($_POST['upload']))
{
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr))
  {
     // Insert record
     $query = "insert into image(image) values('".$name."')";
     mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
     header("location: reg_succes.php");
  }
 }
?>
<body style="background-color:lightblue;">
  <center>
<form method="post" action="" enctype='multipart/form-data'>
  
  <br><br><br><br><br><br><br><br><input type='file' name='file' /><br><br>
  <input type='submit' value='Upload' name='upload'>
</form>
<a href = "Home.html">Go to Home!
</center>
</body>
