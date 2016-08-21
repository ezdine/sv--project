<?php

$con=mysqli_connect('localhost','root','','carhunt');
$selected=mysqli_select_db($con,"car");
$dept = $_GET["first-choice"];
/*if($dept == "R")
{
	$dbselected='r_subjectlist';
}
if($dept == "M")
{
	$dbselected='m_subjectlist';
}
if($dept == "P")
{
	$dbselected='p_subjectlist';
}
if($dept == "U")
{
	$dbselected='u_subjectlist';
}
if($dept == "B")
{
	$dbselected='b_subjectlist';
}
if($dept == "T")
{
	$dbselected='t_subjectlist';
}*/
$choice=$_GET["second-choice"];
$query="SELECT `carid` FROM `car` WHERE `brand`='$choice' AND `type`='$dept'";
$result=mysqli_query($con, $query);
while($row=mysqli_fetch_assoc($result))
{
	echo "<option>".$row['carid']."</option>";
} 

?>