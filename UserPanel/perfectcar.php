<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<link rel="stylesheet" type="text/css" href="css/set2.css" />
	</head>
	<body>
        <?php
       include_once ('simple_html_dom.php');
       $brand=$_POST['brand-choice'];
       $type=$_POST['type-choice'];
       $rb=$_POST['rb'];
       $Uprice=$_POST['price-choice'];
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
        if((empty($brand))||(empty($type))||(empty($rb))||(empty($Uprice)))
       {
            header('Location:index.php');
       }
       $con=mysqli_connect('localhost','root','ezdine@123','carhunt');
       $selected=mysqli_select_db($con,"car");
       $query1="SELECT * FROM `car` WHERE `brand`='$brand' AND `type`='$type' AND `usage`='$rb' AND `price` BETWEEN '$Lprice' AND '$Uprice'";
       $result1=mysqli_query($con, $query1);

       while ($row1=mysqli_fetch_assoc($result1))
      {
         $img1=$row1['image_url'];
         $imageData = base64_encode(file_get_contents($img1));

        ?>


        <div class="grid">
					<figure class="effect-julia">
					<?php echo '<img src="data:image/jpg;base64,'.$imageData.'">'; ?>
						<figcaption>
							<h2><?php echo $row1['carid'] ;?> <span>Julia</span></h2>
							<div>
								<p>Julia dances in the deep dark</p>
								<p>She loves the smell of the ocean</p>
								<p>And dives into the morning light</p>
							</div>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
        </div>
        <?php } ?>
			</body>
</html>