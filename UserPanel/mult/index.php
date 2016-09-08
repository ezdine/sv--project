	<!DOCTYPE html>
	<html lang="en" class="no-js">

	<head>

       	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CarHunt</title>
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <meta name="author" content="Infinity" />
		<!-- demo styles -->
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<!-- menu styles -->
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="../css/set2.css">
		<script src="js/modernizr-custom.js"></script>
		<script src="https://use.fontawesome.com/279bd90973.js"></script>
	</head>

	<body>
		<!-- Main container -->
		<div class="container">
			<!-- Blueprint header -->
			<header class="bp-header cf">
				<div class="dummy-logo">
	               <a href="../index.php"> <img style="padding-top:2em" src="img/logo.png"/></a>
				</div>
				</header>
			<button class="action action--open" aria-label="Open Menu"><i class="fa fa-filter" aria-hidden="true"></i>Filter</button><br/><br/>
			<nav id="ml-menu" class="menu">
				<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
				<div class="menu__wrap">
					<ul data-menu="main" class="menu__level">
						<li class="menu__item"><a class="menu__link" data-submenu="sorting" href="#">Sorting</a></li>
						<li class="menu__item"><a class="menu__link" data-submenu="fuel" href="#">Fuel Type</a></li>
						
						
					</ul>
	                <!--sorting-->
	                <ul data-menu="sorting" class="menu__level">
						<li class="menu__item"><a class="menu__link" href="#">Price:Low to High</a></li>
						<li class="menu__item"><a class="menu__link" href="#">Price:High to Low</a></li>
						<li class="menu__item"><a class="menu__link" href="#">Mileage</a></li>
						<li class="menu__item"><a class="menu__link" href="#">Rating</a></li>
					</ul>
					<!-- Fuel type -->
					<ul data-menu="fuel" class="menu__level">
						<li class="menu__item"><a class="menu__link" href="#">Petrol</a></li>
						<li class="menu__item"><a class="menu__link" href="#">Diesel</a></li>
						<li class="menu__item"><a class="menu__link" href="#">Electric</a></li>
						<li class="menu__item"><a class="menu__link" href="#">Hybrid</a></li>
						
					</ul>
					
				</div>
			</nav>
			<div class="content">
		    <?php
	       include_once ('../simple_html_dom.php');
	       $brand=$_POST['brand-choice'];
	       $type=$_POST['type-choice'];
	     
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
	        if((empty($brand))||(empty($type))||(empty($Uprice)))
	       {
	            header('Location:index.php');
	       }
	       $con=mysqli_connect('localhost','root','ezdine@123','carhunt');
	       $selected=mysqli_select_db($con,"car");
	       if($brand=='all')
	       {
	       	 $query1="SELECT * FROM `car` WHERE `type`='$type' AND `price` BETWEEN '$Lprice' AND '$Uprice'";
	       }
	       else
	       {
	       $query1="SELECT * FROM `car` WHERE `brand`='$brand' AND `type`='$type'  AND `price` BETWEEN '$Lprice' AND '$Uprice'";
	       }
	       $result1=mysqli_query($con, $query1);
	       if (mysqli_num_rows($result1)==0)
	       {?>
	       	<h2 style="text-align:center"><?php echo "No Results!!";?></h2><br/><br/>
	       	<center><a href="../">Back to Home</a></center>
	      
	      <?php }

	       while ($row1=mysqli_fetch_assoc($result1))
	      {
	         
	         $img1=$row1['image_url'];
	         $imageData = base64_encode(file_get_contents($img1));

	        ?>

	        <a href="../slider1.php?type=<?php echo $row1['type'];?>&brand=<?php echo $row1['brand'];?>&car=<?php echo $row1['carid'];?>">
	        <div class="grid">
						<figure class="effect-julia">
						<?php echo '<img style="height:200px;" src="data:image/jpg;base64,'.$imageData.'">'; ?>
							<figcaption>
								<h2><?php echo $row1['carid'] ;?></h2>
								<div>
									<p><?php echo $row1['price'] ;?> INR</p><br>
									<p><?php echo $row1['mileage'] ;?>kmpl</p>
								</div>
								
							</figcaption>			
						</figure>
	        </div></a>
	        <?php } ?>
			</div>
		</div>
	    
	    
		<!-- /view -->
		<script src="js/classie.js"></script>
	    <script>
	        var dummyData = {
	    "Price:Low to High":"<iframe frameborder=\"0\" style=\"height:660px;width:100%;overflow:hidden\" src=\"sortLH.php?b=<?php echo $brand;?>&t=<?php echo $type;?>&p=<?php echo $Uprice;?>&sort=LH\"></iframe>",
	    "Price:High to Low":"<iframe frameborder=\"0\" style=\"height:660px;width:100%;overflow:hidden\" src=\"sortLH.php?b=<?php echo $brand;?>&t=<?php echo $type;?>&p=<?php echo $Uprice;?>&sort=HL\"></iframe>",
	    "Mileage":"<iframe frameborder=\"0\" style=\"height:660px;width:100%;overflow:hidden\" src=\"sortLH.php?b=<?php echo $brand;?>&t=<?php echo $type;?>&p=<?php echo $Uprice;?>&sort=mileage\"></iframe>",
	    "Rating":"<iframe frameborder=\"0\" style=\"height:660px;width:100%;overflow:hidden\" src=\"sortLH.php?b=<?php echo $brand;?>&t=<?php echo $type;?>&p=<?php echo $Uprice;?>&sort=rating\"></iframe>",

	    "Petrol":"<iframe frameborder=\"0\" style=\"height:660px;width:100%;overflow:hidden\" src=\"sortLH.php?b=<?php echo $brand;?>&t=<?php echo $type;?>&p=<?php echo $Uprice;?>&sort=Petrol\"></iframe>" ,
	    "Diesel":"<iframe frameborder=\"0\" style=\"height:660px;width:100%;overflow:hidden\" src=\"sortLH.php?b=<?php echo $brand;?>&t=<?php echo $type;?>&p=<?php echo $Uprice;?>&sort=Diesel\"></iframe>" ,
	    "Electric":"<iframe frameborder=\"0\" style=\"height:660px;width:100%;overflow:hidden\" src=\"sortLH.php?b=<?php echo $brand;?>&t=<?php echo $type;?>&p=<?php echo $Uprice;?>&sort=Electric\"></iframe>",
	    "Hybrid":"<iframe frameborder=\"0\" style=\"height:660px;width:100%;overflow:hidden\" src=\"sortLH.php?b=<?php echo $brand;?>&t=<?php echo $type;?>&p=<?php echo $Uprice;?>&sort=Hybrid\"></iframe>"        
	        }
	    </script>
		<script src="js/main.js"></script>
		<script>
		(function() {
			var menuEl = document.getElementById('ml-menu'),
				mlmenu = new MLMenu(menuEl, {
					// breadcrumbsCtrl : true, // show breadcrumbs
					// initialBreadcrumb : 'all', // initial breadcrumb text
					backCtrl : false, // show back button
					// itemsDelayInterval : 60, // delay between each menu item sliding animation
					onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
				});

			// mobile menu toggle
			var openMenuCtrl = document.querySelector('.action--open'),
				closeMenuCtrl = document.querySelector('.action--close');

			openMenuCtrl.addEventListener('click', openMenu);
			closeMenuCtrl.addEventListener('click', closeMenu);

			function openMenu() {
				classie.add(menuEl, 'menu--open');
			}

			function closeMenu() {
				classie.remove(menuEl, 'menu--open');
			}

			// simulate grid content loading
			var gridWrapper = document.querySelector('.content');

			function loadDummyData(ev, itemName) {
				ev.preventDefault();

				closeMenu();
				gridWrapper.innerHTML = '';
				classie.add(gridWrapper, 'content--loading');
				setTimeout(function() {
					classie.remove(gridWrapper, 'content--loading');
					gridWrapper.innerHTML =dummyData[itemName];
				}, 700);
			}
		})();
		</script>
	</body>

	</html>
