<?php
   error_reporting(0);
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname   = "sebuu";
   
   $conn = mysqli_connect($servername,$username,$password,$dbname);

   if($conn)
   {
      //echo "Connection Ok";
   }
   else{
      echo "Failed".mysqli_connect_error();
   }

?>