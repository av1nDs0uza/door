<?php


  include "connection.php";
  
  $id = $_REQUEST['id'];

            


              $sql="DELETE FROM `in_logs` WHERE id = '$id'; ";
            
              if(mysqli_query($link, $sql))
                {

                  echo"<script> alert('Data deleted') </script>";
                  echo '<script>window.location.href = "log.php";</script>';

                }
           
          else{
              echo "ERROR: Could not able to execute $sql. ";
          }
          

  
  
   mysqli_close($link);
?>