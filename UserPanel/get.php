	<?php
	//Script to populate brand dropdown in get review section
	$con=mysqli_connect('localhost','root','ezdine@123','carhunt');
	$selected=mysqli_select_db($con,"car");
	$dept = $_GET["first-choice"];

	$query="SELECT DISTINCT `brand` FROM `car` WHERE`type`='$dept' ORDER BY `brand`";
	$result=mysqli_query($con, $query);
	echo "<option>"."Brand"."</option>";
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<option>".ucfirst($row['brand'])."</option>";
	} 

	?>