	<?php
  //populate states in find dealer
	$con=mysqli_connect('localhost','root','ezdine@123','carhunt');
	$selected=mysqli_select_db($con,"cardealer");
	$brand = $_GET["first-choice3"];

	$query="SELECT `state` FROM `cardealer` WHERE `brand`='$brand' order by `state`";
	$result=mysqli_query($con, $query);
	echo "<option>"."State"."</option>";
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<option>".$row['state']."</option>";
		
		
	} 

	?>