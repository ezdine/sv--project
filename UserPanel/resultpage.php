<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CarHunt|Results</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/flickity.min.css">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	
	<script src="js/modernizr.custom.js"></script>
</head>

<body style="background:#414A52;color:white">
	<div class="container-fluid">
		<div class="row">
			<div class="header-nav-wrapper">
				<div class="logo">
					<a href="index.php"><img src="img/logo.png" alt="Synthetica Freebie Peter Finlan"></a>
				</div>
				<div class="primary-nav-wrapper">
					<div class="secondary-nav-wrapper">
						<ul class="secondary-nav">
							<li class="subscribe"><a href="#contact" style="color:white">Contact</a></li>
							
						</ul>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
	<header class="hero">
		<div class="carousel js-flickity">
			<div class="carousel-cell" style="background-image: url(img/hero-bg-01.jpg);">
				<div class="hero-bg">
					<div class="container-fluid">
						<div class="row" style="">
							<div class="col-md-12 ">
								<h1 class="wp1 text-center">Introducing The New Cruze</h1>
                                <center><a href="#" class="btn primary wp2">Learn more</a></center>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="carousel-cell" style="background-image: url(img/hero-bg-02.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="wp1">Sports Car Legends</h1>
								<a href="#" class="btn primary wp2">Learn More</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="carousel-cell" style="background-image: url(img/hero-bg-03.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="wp1">Landrover Series</h1>
								<a href="#" class="btn primary wp2">Learn More</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class='mouse-container'>
			<a href="#selectcar">
				<div class='mouse'>
					<span class='scroll-down'></span>
				</div>
			</a>
		</div>
	</header>
    
    <div class="container" id="selectcar">
    <table style="width:100%; border-spacing:0;">

    <?php
       include_once ('simple_html_dom.php');
       $type1=$_POST['first-choice'];
       $brand1=$_POST['second-choice'];
       $car1=$_POST['third-choice'];


       $type2=$_POST['first-choice2'];
       $brand2=$_POST['second-choice2'];
       $car2=$_POST['third-choice2'];

       if((is_null($car1))||(is_null($car2))||(is_null($brand2))||(is_null($type2))||(is_null($type1))||(is_null($brand1)))
       {
       	header('Location:index.php');

       }
       $con=mysqli_connect('localhost','root','','carhunt');
       $selected=mysqli_select_db($con,"car");

       $query1="SELECT * FROM `car` WHERE `brand`='$brand1' AND `type`='$type1'";
       $query2="SELECT * FROM `car` WHERE `brand`='$brand2' AND `type`='$type2'";

       $result1=mysqli_query($con, $query1);
       $result2=mysqli_query($con, $query2);
       $row2=mysqli_fetch_assoc($result2);
       

           
       while ($row1=mysqli_fetch_assoc($result1))
      {
    ?>
       <tr><th>MODEL</th><td><?php echo $row1["carid"];?></font></td><td><?php echo $row2["carid"];?></td></tr>
       <tr><th>PRICE</th><td><?php echo $row1["price"];?></td><td><?php echo $row2["price"];?></td></tr>
       <tr><th>MILEAGE</th><td><?php echo $row1["mileage"];?></td><td><?php echo $row2["mileage"];?></td></tr>
       <tr><th>TORQUE</th><td><?php echo $row1["torq"];?></td><td><?php echo $row2["torq"];?></td></tr>
  	   <tr><th>0-100</th><td><?php echo $row1["c0to100"];?></td><td><?php echo $row2["c0to100"];?></td></tr>

       <?php
            $url1=$row1['review_url'];
			$img1=$row1['image_url'];
			$url2=$row2['review_url'];
			$img2=$row2['image_url'];
			$rating1=$row2['rating'];
			$rating2=$row2['rating'];

			$imageData = base64_encode(file_get_contents($img1));//encoding the scraped image in base64 format.
			$imageData2 = base64_encode(file_get_contents($img2));
			$rateimage1=base64_encode(file_get_contents($rating1));
			$rateimage2=base64_encode(file_get_contents($rating2));

			$html=file_get_html($url1);//scraping contents from the url.
			
			/*Remove image tags from scraped contents */
			foreach($html ->find('img') as $item)
			 {
               $item->outertext = '';
             }
             $html->save();
			
			$html2=file_get_html($url2);
			foreach($html2 ->find('img') as $item) 
			{
              $item->outertext = '';
            }
            $html2->save();
            
            foreach($html->find('div.article') as $key)//scraping contents from the div tag with class name "article".
            {
	         
	         echo "REVIEW <br><br><br>".$row1['carid']."<br><br>".(string)$key."<br>";
	         echo '<img src="data:image/jpg;base64,'.$imageData.'">';
	         echo "<br><br>Rating<br>";
	         echo '<img src="data:image/png;base64,'.$rateimage1.'">';

	        }

	        foreach($html2->find('div.article') as $key)//scraping contents from the div tag with class name "article".
            {
	         
	         echo "<br><br><br><br>".$row2['carid']."<br><br>".(string)$key."<br>";
	         echo '<img src="data:image/jpg;base64,'.$imageData2.'">';
	         echo "<br><br>Rating<br>";
	         echo '<img src="data:image/png;base64,'.$rateimage2.'">';
	         

	        }


	        echo "<br><br><br>SPEC ANALYSIS<br><br><br>"; 

   }

   ?>
 </table>

 

			</div>
   
    
    
    
    
	
	<!-- JS CDNs -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script src="http://vjs.zencdn.net/5.4.6/video.min.js"></script>
	<!-- jQuery local fallback -->
	<script>
	window.jQuery || document.write('<script src="js/min/jquery-1.11.2.min.js"><\/script>')
	</script>
	<!-- JS Locals -->
    
	<script src="js/min/bootstrap.min.js"></script>
	<script src="js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="js/min/jquery.waypoints.min.js"></script>
	<script src="js/min/flickity.pkgd.min.js"></script>
	<script src="js/min/scripts-min.js"></script>
	

  

</body>

</html>
