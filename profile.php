<?php

//$db = mysqli_connect('localhost', 'root', 'passwd@123', 'egov');
//if (!$db) 
//{
 //   die("Connection failed: " . mysqli_connect_error());
//}
include("header.php");
include("config.php");
session_start();
      $cur_user = $_SESSION['login_user'];
      $sql = "select * from reg where Username = '$cur_user'";
      $result = mysqli_query($db,$sql); 
      if (mysqli_num_rows($result) > 0) 
      {  
        while($row = mysqli_fetch_assoc($result)) 
        {
          $image = $row['image'];//blub in jdbc
          $image_src = "upload/".$image;
          $Name = $row["Name"];
          $Phone = $row["Phone"];
          $Reg_no = $row["Username"];
          $Email = $row["Email"];
          $DOB = $row["DOB"];
          $Sex = $row["Sex"];

          /* //echo "<img src = $image_src>"; 
          echo "Name:-  ".$row["Name"]." <br><br>"."Phone:-  ".$row["Phone"]." <br><br>"."Username:-  ".$row["Username"]." <br><br>"."Email:-  ".$row["Email"]." <br><br>"."DOB:-".$row["DOB"]." <br><br>"."Sex:-".$row["Sex"]."<br><br>"."Image:-"."<img src = $image_src>"." <br><br>";   //".Username:-".$row["username"].
        */
        }
  } 
  else 
  {
      echo "error occures";
  }
?>
<html>
<body style="background-color:lightblue;">
  
<link rel="stylesheet" type="text/css" href="profile.css">

 <?php echo "<img src=$image_src height='200' width='200'> ";?>
  
  <div id="reg"><?php echo "Registration Number :-";?> </div>
  <div id="nm"><?php echo "Name :-"; ?> </div>
  <div id="sex"><?php echo "Sex :-"; ?> </div>
  <div id="dob"><?php echo "Date of Birth :-"; ?> </div>
  <div id="cn"><?php echo "Contat Number :-"; ?> </div>
  <div id="email"><?php echo "Email ID :-"; ?> </div>
  
  <div id="Regg">  
    <?php
    echo "$Reg_no"; 
    ?>
  </div>

  <div id="Name">  
    <?php
    echo "$Name"; 
    ?>
  </div>

  <div id="Sexx">  
    <?php
    echo "$Sex"; 
    ?>
  </div>

  <div id="DOBB">  
    <?php
    echo "$DOB"; 
    ?>
  </div>

  <div id="CNN">  
    <?php
    echo "$Phone"; 
    ?>
  </div>

  <div id="Emaill">  
    <?php
    echo "$Email"; 
    ?>
  </div>

</body>

</html>
