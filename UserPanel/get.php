<?php

$con=mysqli_connect('localhost','root','ezdine@123','carhunt');
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
$query="SELECT DISTINCT `brand` FROM `car` WHERE`type`='$dept'";
$result=mysqli_query($con, $query);
echo "<option>"."Brand"."</option>";
while($row=mysqli_fetch_assoc($result))
{
	echo "<option>".ucfirst($row['brand'])."</option>";
} 

?>