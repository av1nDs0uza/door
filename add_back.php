<?php


  include "connection.php";



$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$number=$_REQUEST['number'];
$email=$_REQUEST['email'];

          
            
        $sql="INSERT INTO `user` (`finger_id`, `name`, `number`, `email`) VALUES('$id','$name','$number','$email')";
            
        if(mysqli_query($link, $sql))
          {

                  echo"<script> alert('Data added') </script>";
                  echo '<script>window.location.href = "user_dashboard.php";</script>';
           
          } else{
              echo "ERROR: Could not able to execute $sql. ";
          }
          

  
  
   mysqli_close($link);
?>