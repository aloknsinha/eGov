<?php
include("config.php");
include("header.php");
session_start();
$cur_user = $_SESSION['login_user'];
$_SESSION['atdn'] = $cur_user;
//echo "$cur_user";//---working
?>
<html>
   <head>
   </head>
   <body>
      <link rel="stylesheet" type="text/css" href="home.css">

      <div id="ddown">
      <div class="dropdown">
         <button onmouseover="myFunction()" class="drop">Profile</button>
            <div id="myDropdown" class="dropdown-content">
               <a href ="profile.php">My Profile</a>
               <a href = "profile_edit.php">Edit Profile</a>
               <a href ="logout.php">Sign out</a>
            </div>
      </div>
      
      <script>
         function myFunction()
         {
            document.getElementById("myDropdown").classList.toggle("show");
         }
         window.onclick = function(event) 
         {
         if (!event.target.matches('.drop')) 
         {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) 
            {
               var openDropdown = dropdowns[i];
               if (openDropdown.classList.contains('show')) 
               {
                  openDropdown.classList.remove('show');
               }
            }
         }
         }
</script>
</div>
   
   
   
      <center>
      <div id="welcome_user">
         welcome <?php echo $cur_user; ?> 
      </div>
      </center>

      <div id="co"><a href="course_offered.php"><font color="white">Course Offered</font></a></div>
      <div id="er"><a href="exam_reg.php"><font color="white">Exam Registration</font></a></div>
      <div id="ma"><a href="my_atndnc.php"><font color="white">My Attendance</font></a></div>
      <div id="mr"><a href="my_result.php" ><font color="white">My Result</font></a></div>
      <div id="ar"><a href="annual_reg.php"><font color="white">Annual Registration Form</font></a></div>
      
   </body>
</html>