<?php

$con=mysqli_connect('localhost','root','ezdine@123','carhunt');
$selected=mysqli_select_db($con,"car");
$dept = $_GET["first-choice"];

$choice=$_GET["second-choice"];
$query="SELECT `carid` FROM `car` WHERE `brand`='$choice' AND `type`='$dept'";
$result=mysqli_query($con, $query);
while($row=mysqli_fetch_assoc($result))
{
	echo "<option>".$row['carid']."</option>";
} 

?>
