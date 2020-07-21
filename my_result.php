<?php
//$db = mysqli_connect('localhost', 'root', 'passwd@123', 'egov');
//if (!$db) 
//{
 //   die("Connection failed: " . mysqli_connect_error());
//}
include("header.php");
include("config.php");
session_start();
$cur_user = $_SESSION['atdn'];
$_SESSION['t'] = $cur_user;
 //echo $cur_user2;//success

	  $sql = "SELECT * FROM result1 WHERE ID = '$cur_user'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
      if (mysqli_num_rows($result) > 0) 
      {  
      	while($row = mysqli_fetch_assoc($result)) 
      	{
          $Sub1 = $row["Sub1"];
          $Sub2 = $row["Sub2"];
          $Sub3 = $row["Sub3"];
          $Sub4 = $row["Sub4"];
          $Sub5 = $row["Sub5"];
          $Sub6 = $row["Sub6"];
          //echo $Sub1;
          echo "Subject-1:-".$row["Sub1"]." <br><br>"."Subject-2:-  ".$row["Sub2"]." <br><br>"."Subject-3:-  ".$row["Sub3"]." <br><br>"."Subject-4:-  ".$row["Sub4"]." <br><br>"."Subject-5:-".$row["Sub5"]." <br><br>"."Subject-6:-".$row["Sub6"]."<br><br>";
      	}
  	  } 
	  else 
	  {
	      echo "No Result found !!";
	  }      
?>

<html>
<body>
	<link rel="stylesheet" type="text/css" href="atdn.css">
    <script type="text/javascript" src="atdn.js"></script>
</body>
<div>
  <a href ="pdfresult.php">Download my result</a>
</div>
<div id="Sub1">  
    
</div>

<div id="Sub2">  
    
</div>

<div id="Sub3">  
    
</div>

<div id="Sub4">  
    
</div>

<div id="Sub5">  
    
</div>
  
<div id="Sub6">  
    
</div>

</html>









