<?php

include("conn.php");
$regnum=$_GET['uRegNo'];
$username=$_GET['uuname'];
$busno=$_GET['ubno'];


   $sql = "UPDATE student_details SET username='$username' WHERE register_number=$regnum";
   $sql1 = "UPDATE assign_bus SET bus_number='$busno' WHERE register_number=$regnum";
  
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
