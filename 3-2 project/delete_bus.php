<?php

include("conn.php");
$bno=$_GET['debusno'];


   $sql = "DELETE  FROM bus_details WHERE busnumber='$bno'";
  
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