	<?php
	//script to populate dropdown with dealer locations
	$con=mysqli_connect('localhost','root','ezdine@123','carhunt');
	$selected=mysqli_select_db($con,"cardealer");
	$brand = $_GET["first-choice3"];

	$state=$_GET["second-choice3"];
	$query="SELECT `location` FROM `cardealer` WHERE `state`='$state' AND `brand`='$brand' order by `location`";
	$result=mysqli_query($con, $query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<option>".$row['location']."</option>";
		
		
	} 

	?>