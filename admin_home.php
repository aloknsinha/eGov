<?php
include("config.php");
include("header.php");
session_start();
$curr_user = $_SESSION['login_user'];
$_SESSION['t'] = $curr_user;
echo "$curr_user";	
?>
<html>

   <body>
    <p>NOTE : only class 9th is working. # for testing only</p>
   	<link rel="stylesheet" type="text/css" href="admin_home.css">
    <script type="text/javascript" src="admin_home.js"></script>
    <form method = "post" action = "srch_res.php" enctype='multipart/form-data'>
      <div id="srcbox"> <input placeholder = "Search" name = "srch" type = "text"></div>
      <div id="srcbutton"> <input name = "search" type = "submit" value="search"></div>
      </form>
    <div id="nine">
      <div class="dropdown">
      <button onclick="nine()" class="drop">9th</button>
        <div id="ninedd" class="dropdown-content">
          <!-- <a href ="nine2015.php">2015</a>
          <a href ="nine2016.php">2016</a>
          <a href ="nine2017.php">2017</a>
          <a href ="nine2018.php">2018</a> -->
          <a href ="nine2019.php">2019</a>
          </div>
        </div>
    </div>
    
    <div id="ten">
      <div class="dropdown">
      <button   onclick="ten()" class="drop">10th</button>
        <div id="tendd" class="dropdown-content">
          <a href ="nine2015.php">2015</a>
          <a href ="nine2016.php">2016</a>
          <a href ="nine2017.php">2017</a>
          <a href ="nine2018.php">2018</a>
          <a href ="nine2019.php">2019</a>
          </div>
        </div>
    </div>
    <div id="eleven">
      <div class="dropdown">
      <button  onclick="eleven()" class="drop">11th</button>
        <div id="elevendd" class="dropdown-content">
          <a href ="nine2015.php">2015</a>
          <a href ="nine2016.php">2016</a>
          <a href ="nine2017.php">2017</a>
          <a href ="nine2018.php">2018</a>
          <a href ="nine2019.php">2019</a>
          </div>
        </div>
    </div>
    <div id="twelve">
      <div class="dropdown">
      <button  onclick="twelve()" class="drop">12th</button>
        <div id="twelvedd" class="dropdown-content">
          <a href ="nine2015.php">2015</a>
          <a href ="nine2016.php">2016</a>
          <a href ="nine2017.php">2017</a>
          <a href ="nine2018.php">2018</a>
          <a href ="nine2019.php">2019</a>
          </div>
        </div>
    </div>
    <div id="grad">
      <div class="dropdown">
      <button  onclick="grad()" class="drop">Graduation</button>
        <div id="graddd" class="dropdown-content">
          <a href ="nine2015.php">2015</a>
          <a href ="nine2016.php">2016</a>
          <a href ="nine2017.php">2017</a>
          <a href ="nine2018.php">2018</a>
          <a href ="nine2019.php">2019</a>
          </div>
        </div>
    </div>
    <div id="pg">
      <div class="dropdown">
      <button  onclick="pgrad()"  class="drop">Post Graduation</button>
        <div id="pgdd" class="dropdown-content">
          <a href ="nine2015.php">2015</a>
          <a href ="nine2016.php">2016</a>
          <a href ="nine2017.php">2017</a>
          <a href ="nine2018.php">2018</a>
          <a href ="nine2019.php">2019</a>
          </div>
        </div>
    </div>
  

<!--      <div id="nine"> <a href="class00.php"><font color="white">9th</font></a></div>
      <div id="ten"> <a href="10th.php"><font color="white">10th</font></a></div>
      <div id="eleven"> <a href="11th.php"><font color="white">11th</font></a></div>
      <div id="twelve"> <a href="12th.php"><font color="white">12th</font></a></div>
      <div id=grad> <a href="graduation.php"><font color="white">Graduation</font></a></div>
      <div id="pgrad"> <a href="postgraduation.php"><font color="white">Post Graduation</font></a></div>
    -->
    <div id="deleterec"><a href="del_rec.php"><font color="red">Delete a records</font></a></div>
    <div id="allrec"><a href="view_admin.php"><font color="red">#Show all records</font></a></div>      
    <a href ="logout.php">Sign out</a>
   </body>
</html>