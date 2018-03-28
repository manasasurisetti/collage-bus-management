<?php
$dbservername ="localhost";
$dbusername="root";
$dbpassword="";
$dbName="clzbuz";

$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbName);

   $username = $_GET['username'];
   $password = $_GET['password'];

   $sql = "SELECT * FROM student_details WHERE username ='$username' and password = '$password'";
  $result=mysqli_query($conn,$sql);
  $resultcheck=0;
$resultcheck=mysqli_num_rows($result); 
	if($resultcheck>0) 
  {
  header("location:http://localhost/dbms/3-2%20project/afterlogin.html");
   $_SESSION['message'] = "successfully registered";
   echo "logged in";

   }
   else{
 
   $sql = "SELECT * FROM admin_details WHERE user_name ='$username' and password = '$password'";
  $result=mysqli_query($conn,$sql);
  $resultcheck=0;
$resultcheck=mysqli_num_rows($result); 
	if($resultcheck>0) 
  {
  header("location:http://localhost/dbms/3-2%20project/adminpanel.html");
   $_SESSION['message'] = "successfully registered";

   }
   else 
   {
   
   //	header("location:http://localhost/dbms/3-2%20project/mainpage.html");
   	$_SESSION['message'] = "unsuccessfull registration try again";
   }
}
?>