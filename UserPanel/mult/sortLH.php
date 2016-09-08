	<!DOCTYPE html>
	<!-- Script to sort/filter the results of Find your perfect car-->
	<html lang="en" class="no-js">

	<head><!-- food icons -->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/set2.css">
		
	</head>
	

	<body>
		<!-- Main container -->
		<div class="container">
			<!-- Blueprint header -->
			
			
			
			<div class="content">
				        <?php
	       include_once ('../simple_html_dom.php');
	       $brand=$_GET['b'];
	       $type=$_GET['t'];
	       
	       $Uprice=$_GET['p'];
	       $sort=$_GET['sort'];
	       //setting lower price limit
	       if($Uprice=="1000000")
	       {
	                  $Lprice='200000';
	       }
	       elseif($Uprice=="2000000")
	       {
	                  $Lprice='1000000';
	       }
	       elseif($Uprice=="4000000")
	       {
	                  $Lprice='2000000';
	       }
	       elseif($Uprice=="6000000")
	       {
	                  $Lprice='4000000';
	       }
	       elseif($Uprice=="8000000")
	       {
	                  $Lprice='6000000';
	       }
	       elseif($Uprice=="10000000")
	       {
	                  $Lprice='8000000';
	       }
	       elseif($Uprice=="30000000")
	       {
	                  $Lprice='10000000';
	       }
	       elseif($Uprice=="80000000")
	       {
	                  $Lprice='30000000';
	       }
	        if((empty($brand))||(empty($type))||(empty($Uprice)))
	       {
	            header('Location:index.php');
	       }
	       $con=mysqli_connect('localhost','root','ezdine@123','carhunt');
	       $selected=mysqli_select_db($con,"car");
	      

	       if(($brand=='all')&&($sort=='LH'))
	       {
	       	 $query1="SELECT * FROM `car` WHERE `type`='$type' AND `price` BETWEEN '$Lprice' AND '$Uprice' order by `price`";
	       }
	       elseif(($brand!='all')&&($sort=='LH'))
	       {
	       $query1="SELECT * FROM `car` WHERE `brand`='$brand' AND `type`='$type' AND  `price` BETWEEN '$Lprice' AND '$Uprice' order by `price`";
	       }
	       elseif(($brand=='all')&&($sort=='HL'))
	       {
	       	 $query1="SELECT * FROM `car` WHERE `type`='$type' AND `price` BETWEEN '$Lprice' AND '$Uprice' order by `price` desc";
	       }
	       elseif(($brand!='all')&&($sort=='HL'))
	       {
	       $query1="SELECT * FROM `car` WHERE `brand`='$brand' AND `type`='$type'  AND `price` BETWEEN '$Lprice' AND '$Uprice' order by `price`desc";
	       }
	        elseif(($brand=='all')&&($sort=='mileage'))
	       {
	       	 $query1="SELECT * FROM `car` WHERE `type`='$type' AND  `price` BETWEEN '$Lprice' AND '$Uprice' order by `mileage` desc";
	       }
	       elseif(($brand!='all')&&($sort=='mileage'))
	       {
	       $query1="SELECT * FROM `car` WHERE `type`='$type' AND `brand`='$brand'  AND `price` BETWEEN '$Lprice' AND '$Uprice' order by `mileage`desc";
	       }
	        elseif(($brand=='all')&&($sort=='rating'))
	       {
	         $query1="SELECT * FROM `car` WHERE `type`='$type' AND  `price` BETWEEN '$Lprice' AND '$Uprice' order by `rating` desc";
	       }
	       elseif(($brand!='all')&&($sort=='rating'))
	       {
	       $query1="SELECT * FROM `car` WHERE `type`='$type' AND`brand`='$brand'  AND `price` BETWEEN '$Lprice' AND '$Uprice' order by `rating`desc";
	       }
	       


	        elseif(($brand=='all')&&($sort=='Petrol'))
	       {
	       	 $query1="SELECT * FROM `car` WHERE `type`='$type' AND  `price` BETWEEN '$Lprice' AND '$Uprice' AND `ftype`='$sort'";
	       }
	       elseif(($brand!='all')&&($sort=='Petrol'))
	       {
	       $query1="SELECT * FROM `car` WHERE `brand`='$brand' AND `type`='$type'  AND `price` BETWEEN '$Lprice' AND '$Uprice' AND `ftype`='$sort'";
	       }
	        elseif(($brand=='all')&&($sort=='Diesel'))
	       {
	       	 $query1="SELECT * FROM `car` WHERE `type`='$type' AND  `price` BETWEEN '$Lprice' AND '$Uprice' AND `ftype`='$sort'";
	       }
	       elseif(($brand!='all')&&($sort=='Diesel'))
	       {
	       $query1="SELECT * FROM `car` WHERE `brand`='$brand' AND `type`='$type'  AND `price` BETWEEN '$Lprice' AND '$Uprice' AND `ftype`='$sort'";
	       }
	        elseif(($brand=='all')&&($sort=='Hybrid'))
	       {
	       	 $query1="SELECT * FROM `car` WHERE `type`='$type'  AND `price` BETWEEN '$Lprice' AND '$Uprice' AND `ftype`='$sort'";
	       }
	       elseif(($brand!='all')&&($sort=='Hybrid'))
	       {
	       $query1="SELECT * FROM `car` WHERE `brand`='$brand' AND `type`='$type' AND `price` BETWEEN '$Lprice' AND '$Uprice' AND `ftype`='$sort'";
	       }
	        elseif(($brand=='all')&&($sort=='Electric'))
	       {
	       	 $query1="SELECT * FROM `car` WHERE `type`='$type'  AND `price` BETWEEN '$Lprice' AND '$Uprice' AND `ftype`='$sort'";
	       }
	       elseif(($brand!='all')&&($sort=='Electric'))
	       {
	       $query1="SELECT * FROM `car` WHERE `brand`='$brand' AND `type`='$type'  AND `price` BETWEEN '$Lprice' AND '$Uprice' AND `ftype`='$sort'";
	       }


	       $result1=mysqli_query($con, $query1)or die(mysqli_error($con));
	       if (mysqli_num_rows($result1)==0)
	       {?>
	       	<h2 style="text-align:center;color:#fff"><?php echo "No Results!!";?></h2><br/><br/>
	       	
	      
	      <?php }
	      else
	      {

	       while ($row1=mysqli_fetch_assoc($result1))
	      {
	         $img1=$row1['image_url'];
	         $imageData = base64_encode(file_get_contents($img1));

	        ?>

	         <a href="../perfcarrev.php?type=<?php echo $row1['type'];?>&brand=<?php echo $row1['brand'];?>&car=<?php echo $row1['carid'];?>">
	        <div class="grid">
						<figure class="effect-julia">
						<?php echo '<img style="height:200px;	" src="data:image/jpg;base64,'.$imageData.'">'; ?>
							<figcaption>
								<h2><?php echo $row1['carid'] ;?></h2>
								<div>
									<p><?php echo $row1['price'] ;?> INR</p><br/>
	                <p><?php echo $row1['mileage'] ;?>kmpl</p>

								</div>
								
							</figcaption>			
						</figure>
	        </div></a>
	        <?php }} ?>
			</div>
		</div>
	    
	    
		
		
	</body>

	</html>
