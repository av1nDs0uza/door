<?php


  include "connection.php";
  
  $id = $_REQUEST['id'];

  $output = preg_replace("/[^0-9]/", "", $id);


  $select_path="SELECT * FROM `board` WHERE BINARY disp COLLATE utf8mb4_bin  = '$output'";



            $var=mysqli_query($link,$select_path);

            
            while($row=mysqli_fetch_array($var))
            {

                 $l1=$row['l1'];

                 $length = strlen($l1);


                if ($length < 20)
                {
                    $l1 = str_pad($l1, 20,'&',STR_PAD_RIGHT);
                }



                 $l2=$row['l2'];

                $length = strlen($l2);


                if ($length < 20)
                {
                    $l2 = str_pad($l2, 20,'&');
                }


                 $l3=$row['l3'];

                 $length = strlen($l3);


                if ($length < 20)
                {
                    $l3 = str_pad($l3, 20,'&');
                }

                 $l4=$row['l4'];
                 $length = strlen($l4);


                if ($length < 20)
                {
                    $l4 = str_pad($l4, 20, '&');
                }

            }


   echo "*".$l1.",".$l2.",".$l3.",".$l4."#";
  
   mysqli_close($link);

?>