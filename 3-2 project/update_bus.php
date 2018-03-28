<?php

include("conn.php");
$bno=$_GET['ubusno'];
$stop=$_GET['ustop'];
$time=$_GET['utime'];


   $sql = "UPDATE bus_details SET btime='$time',busnumber='$bno' WHERE Stop='$stop'";
  
  if ( mysqli_query($conn,$sql))
  {
  header("location:adminpanel.html");
   $_SESSION['message'] = "successfully updated";
   echo "string";
   }
   else 
   {
  	header("location:adminpanel.html");
   	$_SESSION['message'] = "unsuccessfull update try again";
   	echo " connected";
}
   ?>
