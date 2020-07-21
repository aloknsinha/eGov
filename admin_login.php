<?php   
include("config.php");
include("header.php");
session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      $myusername = $_POST['username'];
      $mypassword = $_POST['pass']; 
      
      $sql = "SELECT Username,Password FROM admins WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);      
      if($count == 1) 
      {
        $_SESSION['login_user'] = $myusername;
        header("location: admin_home.php");
      }
      else 
      {
         echo "<script type ='text/javascript'>alert('wrong username and password.');</script>";
      }
   }
?>
<html>
<title>Officials login Page</title>
<head> 
<div id="h1">
    <h1></h1>
  </div>
  <div id="p1">
    <p>
    </p>
  </div>     
</head>
  <center>
  <body style="background-color:lightblue;">
    <script type="text/javascript" language="javascript"></script>
      <link rel="stylesheet" type="text/css" href="home.css">
   <table width="40%" border="4">
    <tr>
    <td width="20%" bgcolor="gray">
    <div id ="userlogin" align="center" class="style1">Admin Login </div><br>
      <form action = "" method = "post">
      <div id="loginphp">
        <label>UserName  :</label><input type = "text" name = "username"/><br /><br />
        <label>Password  : </label><input type = "password" name = "pass" class = "box" /><br/>
      </div>
      <div id="login_submit">
        <input type = "submit" value = " Submit "/><br />
      </div>
   </form>
   </td>
</tr>
</table>
   <a href = "Home.html">Home
 </body>
 </center>
</html>
