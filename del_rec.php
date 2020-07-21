<?php
  include("header.php");
  include("config.php");
  session_start();

  if(isset($_POST['delete'])) 
  {        
    $id = $_POST['ID'];
    
    $search_user = "SELECT Username FROM reg WHERE Username = '$id'";
    $result1 = mysqli_query($db,$search_user);
    $count = mysqli_num_rows($result1);     
    
    $src = "SELECT ID FROM result1 WHERE ID = '$id'";
    $result2 = mysqli_query($db,$src);
    $count2 = mysqli_num_rows($result2);
    
    if($count > 0 || $count2 > 0) 
    {
      if($count > 0)
      {
        $sql = "DELETE FROM reg WHERE Username = '$id'";
        $result = mysqli_query($db, $sql);
        
        if($count2 > 0)
        {
          $sql2 = "DELETE FROM result1 WHERE ID = '$id'";
          $result2 = mysqli_query($db, $sql2);  
        }
        echo "<script type ='text/javascript'>alert('Data Deleted  successfully');</script>"; 
      }
    }
    else 
    {
      echo "<script type ='text/javascript'>alert('Wrong ID');</script>";
    }
  }//if close
?>
              
<html>
  <head>
   <title>Deleted a Record</title>
  </head>
  <body>
    <center>
    <form method = "post" action = "" enctype='multipart/form-data'>
      ID<input name = "ID" type = "text">
      <input name = "delete" type = "submit" id = "delete" value = "Delete">
    </form>
    </center>      
  </body>
</html>