<?php
include("header.php");
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      $Name = $_POST['name'];
      $Email = $_POST['email'];
      $Phone = $_POST['phone'];
      $Dob = $_POST['dob'];
      $Sex = $_POST['sex'];
      $ID = $_POST['id'];
      $Password = $_POST['password'];
      $CPass = $_POST['cpass'];
      
      //$cr_table = "create table reg(Name varchar(40),Email varchar(30),Phone varchar(10), Username varchar(8), Password varchar(30));";
      //$crtable = mysqli_query($db,$cr_table);

      $search_user = "SELECT username FROM reg WHERE username = '$ID'";
      $result1 = mysqli_query($db,$search_user);
      $count = mysqli_num_rows($result1);    	
      if($Password <> $CPass)
      {
        echo "<script type ='text/javascript'>alert('Enter the same password !');</script>";
      }
      else
      {
      if($count > 0) 
      {
        echo "<script type ='text/javascript'>alert('user allready exit');</script>";
      }
      else 
      {
       if(isset($_POST['sub']))
        {
         
          $name = $_FILES['file']['name'];
          $target_dir = "upload/";
          $target_file = $target_dir . basename($_FILES["file"]["name"]);
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          $extensions_arr = array("jpg","jpeg","png","gif");
          if(in_array($imageFileType,$extensions_arr))
          {
             $sql = "insert into reg(Name,Email,Phone,Username,Password,DOB,Sex,image) values('$Name','$Email','$Phone','$ID','$Password','$Dob','$Sex','".$name."');";
              mysqli_query($db,$sql);
              move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
             header("location: reg_succes.php");
          }
         } 
        
       }//else clos
      }
    }//first if close
?>
<html>
   <head>
      <title>Register Page</title>
   </head>
   <center>
   <div id = "all">
    <table width="50%" border="4">
    <tr>
    <td width="20%" bgcolor="gray">
     <div id ="userreg" align="center" class="style1">User Registration </div><br>
   <form action = "" method = "post" onsubmit = "validation()" enctype='multipart/form-data'>
    <div id="reg">
      <div id="name">Name</div> <div id="n"><input type = "text" id="n" name = "name"></div>
      <div id="email">Email</div> <div id="e"><input type = "text" id="e" name = "email"></div>
      <div id="phone">Phone</div> <div id="p"><input type = "text" id="p" name = "phone" /><br></div>
      <div id="dob">DOB</div> <div id="d"><input type = "text" id="d" name = "dob" /><br></div>
      <div id="sex">Sex</div> <div id="s"><input type = "text" id="s" name = "sex" /><br></div>
      <div id="id">ID</div> <div id="i"><input type = "text" id="i" name = "id" /><br></div>
      <div id="pass">Password</div> <div id="ps"><input type = "password" id="ps" name = "password" /><br></div>
      <div id="cps">Confirm Password</div> <div id="cpass"><input type = "password" id="cpass" name = "cpass" /><br><br></div> 
      <div id="file">File Upload</div> <div id="f"><input type='file' name='file' /><br></div>
      <div id="submit"><input type = "submit" value = " Submit " name="sub"/><br></div>
    </div>
      </td>
      </tr>
      </table>
      </div>
    </form>  
    <body style="background-color:lightblue;">
    <script type="text/javascript" language="javascript"></script>
      <link rel="stylesheet" type="text/css" href="register.css">
      <script src="reg.js"></script>
   
   	<a href = "loginn.php">Login <br><br><br>
      <a href = "Home.html">Go to Home!
   	<script type="text/javascript">
	
  function validation()[]
	{
		var x1=document.getElementById("n").value;
		var x2=document.getElementById("e").value;
		var x3=document.getElementById("p").value;
		var x4=document.getElementById("u").value;
		var x5=document.getElementById("ps").value;
	    if(x1=="")
	    {
	       alert("Name should not be blank.");	
	    }
	    
	    else if(x2=="")
	    {
	    	alert("Email Id should not be blank.");
	    }
	    else if(x3 =="")
	    {
	    	alert("Contact number should not be blank.");
	    }
	    else if(x4 == "")
	    {
	    	alert("Username should not be blank.");
	    }
	    else if(x5 == "")
	    {
	    	alert("Password should not be blank.");
	    }
	}
	</script>
   </body>
   </center>
</html>
