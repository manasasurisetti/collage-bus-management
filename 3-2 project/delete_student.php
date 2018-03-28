<?php

include("conn.php");
$regnum=$_GET['dRegNo'];


   $sql = "DELETE  FROM student_details WHERE register_number=$regnum";
   $sql1 = "DELETE  FROM assign_bus WHERE register_number=$regnum";
  
  if ( mysqli_query($conn,$sql) && mysqli_query($conn,$sql1))
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
