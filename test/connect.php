<?php
  $host="Localhost";
  $user="root";
  $password="";
  $db_name="base";


  $conn=mysqli_connect($host,$user,$password,$db_name);
  if($conn){
   echo " connection successfully ";
  }
  else  {
    echo "invalid connection ";
  }
?>