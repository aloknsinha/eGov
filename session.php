<?php
   include('config.php');
   session_start();
   
   $cur_user = $_SESSION['login_user'];
   
   $sql = mysqli_query($db,"select username from admin where username = '$cur_user' ");
   
   $row = mysqli_fetch_array(sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>