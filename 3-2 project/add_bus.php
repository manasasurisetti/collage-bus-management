<?php

include("conn.php");
$bno=$_GET['abusno'];
$stop=$_GET['astop'];
$time=$_GET['atime'];


  
  $sql = "INSERT INTO bus_details VALUES ('$bno','$stop','$time');" ;
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
