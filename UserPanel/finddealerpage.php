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
       $brand=$_POST['first-choice3'];
       $location=$_POST['third-choice3'];


       if((is_null($brand))||(is_null($location)))
       {
       	header('Location:index.php');

       }
       $con=mysqli_connect('localhost','root','','carhunt');
       $selected=mysqli_select_db($con,"cardealer");

       $query1="SELECT * FROM `cardealer` WHERE `brand`='$brand' AND `location`='$location'";
       

       $result1=mysqli_query($con, $query1);
      
       

           
       while ($row1=mysqli_fetch_assoc($result1))
      {
      ?>
       <tr><th>NAME</th><td><?php echo $row1["name"];?></font></td></tr>
       <tr><th>BRAND</th><td><?php echo $row1["brand"];?></td><td></tr>
       <tr><th>LOCATION</th><td><?php echo $row1["location"];?></td></tr>
       <tr><th>STATE</th><td><?php echo $row1["state"];?></td></tr>
  	   <tr><th>CONTACT</th><td><?php echo $row1["contact"];?></td></tr>
  
  <?php } ?>
       
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
