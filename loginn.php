<?php   
include("header.php");
include("config.php");
session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      $myusername = $_POST['username'];
      $mypassword = $_POST['pass']; 
      
      $sql = "SELECT Username,Password FROM reg WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);    	
      if($count == 1) 
      {
        $_SESSION['login_user'] = $myusername;
        header("location: welcome.php");
      }
      else 
      {
         echo  "<script type ='text/javascript'>alert('wrong credential. Enter again !');</script>";
      }
   }
?>

<html>
<title>Login Page</title>
<head> 
</head>
  <center>
  <body style="background-color:lightblue;">
    <script type="text/javascript" language="javascript"></script>
      <link rel="stylesheet" type="text/css" href="home.css">
    
    <div id = "all">
    <table width="40%" border="4">
    <tr>
    <td width="20%" bgcolor="gray">
    <div id ="userlogin" align="center" class="style1">User Login </div><br>
  <form action = "" method = "post" onsubmit = "error()" enctype='multipart/form-data'>
      <div id="loginphp">
        <label>UserName  :</label><input type = "text" name = "username"/><br><br>
        <label>Password  : </label><input type = "password" name = "pass" class = "box" /><br>
      </div>
      <div id="login_submit">
        <input type = "submit" value = " Submit "/><br>
      </div>
   </form>
 </td>
</tr>
</table>
</div>
   <a href = "register.php">New User ? Register Yourself !
    <a href = "Home.html">Go to Home
 </body>
</center>
</html>
