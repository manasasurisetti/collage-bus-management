<?php

include("conn.php");
$regnum=$_GET['RegNo'];
$username=$_GET['uname'];
$busno=$_GET['bno'];
$password=$_GET['password'];


   $sql = "INSERT INTO student_details (register_number,username,password) VALUES ('$regnum','$username','$password');" ;
   $sql1 = "INSERT INTO assign_bus (register_number,bus_number) VALUES ('$regnum','$busno');" ;
 $sql2="SELECT count(bus_number) as total from assign_bus where bus_number='$busno';";
 $result=mysqli_query($conn,$sql2);
$data=mysqli_fetch_assoc($result);
$i= $data['total'];
  if ( $i<3 && mysqli_query($conn,$sql) && mysqli_query($conn,$sql1) )
  {
   //header("location:adminpanel.html");
   $_SESSION['message'] = "successfully registered";
   echo $i;
   }
   else 
   {
   	//header("location:adminpanel.html");
   	$_SESSION['message'] = "unsuccessfull registration try again";
    $i=$i+1;
echo $i;
   }
   ?>

