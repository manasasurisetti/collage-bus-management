<?php
require('conn.php');
echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
</body>
<a href="afterlogin.html">back</a>';

$sql="SELECT * FROM bus_details ORDER BY busnumber ASC;";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result); 
	if($resultcheck>0) 
	{

		 echo '<table class="table table-dark table-striped"><tr>
  <th>BUS NO</th>
  <th>STOP</th>
  <th>TIMINGS</th>
  <th>VIEW ROUTE</th>
  </tr>';
		while($row=mysqli_fetch_assoc($result))
		 {
		echo "<tr><td>" . $row['busnumber']. "</td>     <td>" . $row['Stop']. "</td>     <td> " . $row['btime']. "</td> <td><a href=\"map1.html\"
  onmouseover=\"document.getElementById('place-holder-a').src='map.jpg';\"
  
   onmouseout=\"document.getElementById('place-holder-a').src='';\"
>
  view route
  <img src=\"\" id=\"place-holder-a\" style=\" margin-right:50px; position: absolute;\" />
</a></td>
</tr>";

		}
		echo "</table>";

	} 
?>






