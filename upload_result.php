<?php include("header.php");include("config.php");session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
 {
      $ID = $_POST['ID'];
      $Sub1 = $_POST['sub1'];
      $Sub2 = $_POST['sub2'];
      $Sub3 = $_POST['sub3'];
      $Sub4 = $_POST['sub4'];
      $Sub5 = $_POST['sub5'];
      $Sub6 = $_POST['sub6'];      
      $count = 1;
      $search_user = "SELECT Username FROM reg WHERE Username = '$ID'";
      $result1 = mysqli_query($db,$search_user);
      $count = mysqli_num_rows($result1);    	
      //echo $count;
      $src = "SELECT ID FROM result1 WHERE ID = '$ID'";
      $r = mysqli_query($db,$src);
      $c = mysqli_num_rows($r);    	
      
      if($Sub1==""||$Sub2==""||$Sub3==""||$Sub4==""||$Sub5==""||$Sub6==""||$ID=="")
      {
        echo "<script type ='text/javascript'>alert('Any area should not be blank !!!!!!!!!');</script>";
      }
      else
      { 
        if($count > 0) 
        {
          if($c > 0)
          {
          	echo "<script type ='text/javascript'>alert('Result allready submitted');</script>";
          }
          else
          {
  	        if(isset($_POST['sub']))
  	        {
  	         	$sql = "insert into result1(ID,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6) values('$ID','$Sub1','$Sub2','$Sub3','$Sub4','$Sub5','$Sub6');";
  	            mysqli_query($db,$sql);
  	            //header("location: reg_succes.php");
  	        	echo "<script type ='text/javascript'>alert('inserted');</script>";
  	        }
      	}
        }
        else
        {
        	echo "<script type ='text/javascript'>alert('Wrong reg. no.');</script>";
        }
       }// if close
    }
?>

<html>
   <head>
      <title>Upload Results</title>
   </head>
   <center>
   <div id = "all">
    <table width="50%" border="4">
    <tr>
    <td width="20%" bgcolor="gray">
     <div id ="userreg" align="center" class="style1">Result for First Year </div><br>
   <form action = "" method = "post" enctype='multipart/form-data'>
    
      <div id="IDD">Reg No.</div> <div id = "id"> <input type = "text"  name = "ID"></div>
      <div id="reg">
	      
        <div id="subb1">Sub1</div><input type = "text"  id="sub1" name = "sub1"><br></div>
	      <div id="subb2">Sub2</div><input type = "text"  id="sub2" name = "sub2"><br></div>
	      <div id="subb3">Sub3</div><input type = "text"  id="sub3" name = "sub3"><br></div>
	      <div id="subb4">Sub4</div><input type = "text"  id="sub4" name = "sub4"><br></div>
	      <div id="subb5">Sub5</div><input type = "text"  id="sub5" name = "sub5"><br></div>
	      <div id="subb6">Sub6</div><input type = "text"  id="sub6" name = "sub6"><br></div>
	      <div id="submit"><input type = "submit" value = " Submit " name="sub"/><br></div>
      
      </div>
      </td>
      </tr>
      </table>
      </div>
    </form>  
<body style="background-color:lightblue;">
<script type="text/javascript" language="javascript"></script>
<link rel="stylesheet" type="text/css" href="upload_result.css">
<script src="reg.js"></script>   
<a href = "loginn.php">Login <br><br><br>
<a href = "Home.html">Go to Home!
<a href = "reg_students.php">Show all Registered student !

<script type="text/javascript">
	</script>
   </body>
   </center>
</html>