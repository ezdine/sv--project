<?php
include_once("scripts.js");
?>
        <!DOCTYPE html>
        <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
        <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
        <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
        <!--[if gt IE 8]><!-->
        <html class="no-js" lang="en-US">
        <!--<![endif]-->

        <head>
        	<meta charset="utf-8">
            
        	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        	<title>CarHunt|Home</title>
        	<meta name="description" content="">
        	<meta name="keywords" content="" />
        	<meta name="author" content="Infinity" />
        	<meta name="viewport" content="width=device-width, initial-scale=1">
        	<link rel="stylesheet" href="css/bootstrap.min.css" />
        	<link rel="stylesheet" href="css/animate.min.css">
        	<link rel="stylesheet" href="css/flickity.min.css">
            <link rel="stylesheet" href="css/styles.css">
        	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
            <link rel="stylesheet" type="text/css" href="css/compare/component.css"/>
            <link rel="stylesheet" type="text/css" href="css/styled.css"/>
            <link rel="stylesheet" type="text/css" href="css/vicons-font.css"/>
        	<script src="js/modernizr.custom.js"></script>

        </head>

        <body style="background:#414A52">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="header-nav-wrapper">
        				<div class="logo">
        					<a href="index.php"><img src="img/logo.png"></a>
        				</div>
                        <div class="primary-nav-wrapper">
                            <div class="secondary-nav-wrapper">
                                <ul class="secondary-nav">
                                    <li class="subscribe"><a href="#ecww-widgetwrapper" style="color:white">EMI Calculator</a></li>
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
                                       
                                        <center><a href="slider1.php?type=sedan&brand=chevorlet&car=cruze" class="btn primary wp2">Learn more</a></center>
                                        
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
        								<h1 class="wp1 left-top">Sports Car Legend</h1>
        								<a href="slider1.php?type=sportscar&brand=audi&car=R8 V10 Plus" class="btn primary wp2">Learn More</a>
        							</div>
        						</div>
        						
        					</div>
        				</div>
        			</div>
        			<div class="carousel-cell" style="background-image: url(img/hero-bg-03.jpg);">
        				<div class="hero-bg">
        					<div class="container">
        						<div class="row">
        							<div class="col-md-12" >
        								<h1 class="wp1">Evoque</h1>
        								<a href="slider1.php?type=suv&brand=land%20rover&car=evoque" class="btn primary wp2">Learn More</a>
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
            
            
            
         <div class="container-fluid details" id="selectcar">
             <section class="compare-section bg-1">
                 
                 <div class="pricing compare-inner">
                 
                     <!--Get Review-->
                <div class="pricing__item price1">
                <form action="overview.php" method="get">
                        <center><h2>Get Review</h2></center><br/><br/><br/>
                        <div role="form" class="forms">
                            <h2 style="font-size:20px;">Select Type</h2><br/>
                                <div class="form-group">
                                <select class="form-control" name="first-choice4" id="first-choice4" onchange="get()">
                                    <option value="" selected="">Type</option>
                                    <option value="hatchback">Hatchback</option>
                                    <option value="convertible">Convertible</option>
                                    <option value="sportscar">Sportscar</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="suv">SUV</option>
                                    <option value="muv">MUV</option>
                                    <option value="coupe">Coupe</option>
                                </select>  
                              </div><br/>
                            <h2 style="font-size:20px;">Select Brand</h2><br/>
                                <div class="form-group">
                                <select class="form-control" name="second-choice4" id="second-choice4" onchange="get_data4()">
                                 <option value="" selected="">Brand</option>  
                                </select>  
                              </div><br/>
                                <div class="form-group">
                                <h2 style="font-size:20px;">Select Car</h2><br/>
                                <select class="form-control" id="third-choice4" name="third-choice4">
                                    <option value="" selected="">Car Name</option>
                                    
                                </select>  
                                </div><br/>
                            <center><button class="button button--shikoba button--round-l" disabled="true" name="review" id="review"><i class="button__icon icon icon-forward"></i><span>Go</span></button></center><br/>
                        </div>
                        </form>
                    </div>
                 <!--Get Review ends-->
                 <!--Find Cars-->

                   <div class="pricing__item price1">
                    <form action="mult/index.php" method="post">
                    <center><h2 style="font-size:2em;">Get Your Perfect Car</h2></center><br/>
                        <h2 style="font-size:20px;">Select Budget</h2><br/>
                        <select class="form-control" name="price-choice" id="price-choice">
                                  <option value="" selected="">Budget</option>
                                    <option value="1000000">2L-10L</option>
                                    <option value="2000000">10L-20L</option>
                                    <option value="4000000">20L-40L</option>
                                    <option value="6000000">40L-60L</option>
                                    <option value="8000000">60L-80L</option> 
                                    <option value="10000000">80L-1Cr</option>  
                                    <option value="30000000">1Cr-3Cr</option> 
                                    <option value="80000000">Above 3Cr</option>  
                                </select><br/><br/>
                        
                        
                        
                        
                        <h2 style="font-size:20px;">Select Type</h2><br/>
                        <select class="form-control" name="type-choice" id="type-choice">
                                  <option value="" selected="">Type</option>
                                    <option value="hatchback">Hatchback</option>
                                    <option value="convertible">Convertible</option>
                                    <option value="sportscar">Sportscar</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="suv">SUV</option>
                                    <option value="muv">MUV</option>
                                    <option value="coupe">Coupe</option>  
                                </select><br/><br/>
                        <h2 style="font-size:20px;">Select Brand</h2><br/>
                        <select class="form-control" name="brand-choice" id="brand-choice" onchange="enablebtn()">
                                
                                   <option value="" selected="">Brand</option>
                                   
                                    <?php
                                    $con1=mysqli_connect('localhost','root','ezdine@123','carhunt');
                                    mysqli_select_db($con1,"car"); 
                                    $query="SELECT DISTINCT `brand` FROM `car` ORDER BY `brand`";
                                    $result1=mysqli_query($con1,$query);
                                    while ($row1=mysqli_fetch_array($result1)){
                                ?>
                                <option value="<?php echo $row1['brand'];?> "> <?php echo ucfirst($row1['brand']);?> </option>
                                    <?php } ?>
                                <option value="all">All</option>
                                </select><br/><br/>
                        
                        <style>
                            label > input{ /* HIDE RADIO */
                            visibility: hidden; /* Makes input not-clickable */
                            position: absolute; /* Remove input from document flow */
                            }
                            label > input + img{ /* IMAGE STYLES */
                                cursor:pointer;
                                border:2px solid transparent;
                            }


                        </style>
                        <center><button class="button button--shikoba button--round-l" name="perser" id="perser" disabled="true"><i class="button__icon icon icon-search"></i><span>Search</span></button></center><br/>
                    </form>
                    </div>
                 <!--Find Cars ends-->
                 
                
                 
                 <!--Find Dealer-->
                     
                <div class="pricing__item price1 ">
                <form action="finddealerpage.php" method="post">
                            <center><h2 style="font-size:35px;">Find Dealer</h2></center><br/><br/><br/>
                     <h2 style="font-size:20px;">Select Brand</h2><br/>
                                <div class="form-group">
                                <select class="form-control" name="first-choice3" id="first-choice3" onchange="get_state()">
                                 <option value="" selected="">Brand</option>
                                    <?php
                                    $con1=mysqli_connect('localhost','root','ezdine@123','carhunt');
                                    mysqli_select_db($con1,"cardealer");
                                    $query="SELECT DISTINCT `brand` FROM `cardealer` order by `brand`";
                                    $result1=mysqli_query($con1,$query);
                                    while ($row1=mysqli_fetch_array($result1)){
                                ?>
                                <option value="<?php echo $row1['brand'];?> "> <?php echo ucfirst($row1['brand']);?> </option>
                                    <?php } ?>
                                </select>  
                              </div><br/>
                     <h2 style="font-size:20px;">Select State</h2><br/>
                                <div class="form-group">
                                <select class="form-control" name="second-choice3" id="second-choice3" onchange="get_data3()">
                                    
                                    <option value="" selected="">State</option>
                                </select>  
                              </div><br/>
                     <h2 style="font-size:20px;">Location</h2><br/>
                                <div class="form-group">
                                <select class="form-control" name="third-choice3" id="third-choice3">

                                    <option value="" selected="">Location</option>
                                </select>  
                             
                              </div><br/>
                   

                    <center><button class="button button--shikoba button--round-l" disabled="true" name="search" id="search"><i class="button__icon icon icon-search" ></i><span>Search</span></button></center><br/>
                    </form>
                </div>
                 <!--Find Dealer ends-->
                 </div>
             </section>
        </div>
            
            <hr class="half-rule" style="width: 100px;margin: 40px auto;">
            
        		 <!--Recommendation Starts-->
            
            <div class="container">
                <h2 class="text-center">Top Recomendations</h2><br/>
                <div class="row">
                
                <?php
                $con1=mysqli_connect('localhost','root','ezdine@123','carhunt');
                mysqli_select_db($con1,"car");
               
                $query="SELECT * FROM `car` order by `views` desc limit 3 ";
                $result1=mysqli_query($con1,$query);
                while ($row1=mysqli_fetch_array($result1)){
                $img1=$row1['image_url'];
                $imageData = base64_encode(file_get_contents($img1));
                ?>
                    <a href="slider1.php?type=<?php echo $row1['type'];?>&brand=<?php echo $row1['brand'];?>&car=<?php echo $row1['carid']; ?>">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <?php echo '<img class="img-responsive" src="data:image/jpg;base64,'.$imageData.'">'; ?>
                            <h3 class="text-center" style="color:#fff"><?php echo ucfirst($row1['carid']); ?></h3>
                        </div>
                        </a>
                <?php } ?>
                 </div>
            </div>
            
            <!--Recommendation Ends-->

                <hr class="half-rule" style="width: 100px;margin: 40px auto;">
            
            
            <!-- Compare Section -->
            
             <div class="container-fluid">
               <form action="resultpage.php" method="get"> 
                <section class="compare-section bg-1">
                    <h2 class="compare-section__title">Compare</h2><br/><br/><br/><br/><br/><br/>
                    <div class="pricing compare-inner">
                        
                       <div class="pricing__item animate wp2">
                        <span class="big">+</span><br/>
                            <div role="form" class="forms">
                                <div class="form-group">
                                <select class="form-control" name="first-choice" id="first-choice" onchange="get2()">
                                    <option value="" selected="">Type</option>
                                    <option value="hatchback">Hatchback</option>
                                    <option value="convertible">Convertible</option>
                                    <option value="sportscar">Sportscar</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="suv">SUV</option>
                                    <option value="muv">MUV</option>
                                    <option value="coupe">Coupe</option>
                                </select>  
                              </div>
                              <br/>
                                <div class="form-group">
                                <select class="form-control" name="second-choice" id="second-choice" onchange="get_data()">
                                
                                    <option value="" selected="">Brand</option>

                                </select>  
                              </div>
                              <br/>
                                <div class="form-group">
                                <select class="form-control" id="third-choice" name="third-choice">
                                    <option value="" selected="">Car Name</option>
                                    
                                </select>  
                                </div>
                        </div>
                        </div>
                        <div class="pricing__item wp2">
                        <span class="big">+</span><br/>
                            <div role="form" class="forms">
                                <div class="form-group">
                                <select class="form-control" id="first-choice2" name="first-choice2" onchange="get3()">
                                    <option value="" selected="">Type</option>
                                    <option value="hatchback">Hatchback</option>
                                    <option value="convertible">Convertible</option>
                                    <option value="sportscar">Sportscar</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="suv">SUV</option>
                                    <option value="muv">MUV</option>
                                    <option value="coupe">Coupe</option>
                                </select>  
                              </div>
                              <br/>
                                <div class="form-group">
                                <select class="form-control" name="second-choice2" id="second-choice2" onchange="get_data2()" >
                                  <option value="" selected="">Brand</option>
                                </select>  
                              </div>
                              <br/>
                                <div class="form-group">
                                <select class="form-control" name="third-choice2" id="third-choice2">
                                    <option value="" selected="">Car Name</option>
                                   
                                </select>  
                                </div>
                        </div>
                        </div>
                    
                        </div>
                    <button class="btn-pri button--round-l wp2" type="submit" id="submit" name="submit" disabled="true" style="vertical-align:middle"><span>Compare </span></button>
                </section>
               </form> 
            </div>
            <!--Compare section ends -->
            
            
            
           
            
            <hr class="half-rule" style="width: 100px;margin: 40px auto;">

                 <!--top compare Starts-->
            
            <div class="container">
                <h2 class="text-center">Top Compared Cars</h2><br/>
                <div class="row">
                
                <?php
                $con1=mysqli_connect('localhost','root','ezdine@123','carhunt');
                mysqli_select_db($con1,"comparecar");
               
                $query="SELECT * FROM `comparecar` order by `views` desc limit 3 ";
                $result1=mysqli_query($con1,$query);
                while ($row1=mysqli_fetch_array($result1)){
               

                
                ?>
                        <a href=
"topcompar.php?first-choice=<?php echo $row1['type1'];?>&second-choice=<?php
echo $row1['brand1'];?>&third-choice=<?php echo $row1['car1'];?>&first-choice2=<?php echo $row1['type2'];?>&second-choice2=<?php echo $row1['brand2'];?> &third-choice2=<?php echo $row1['car2'];?>">

                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <h3 class="text-center" style="color:#fff"><?php echo ucfirst($row1['car1']).' vs '. ucfirst($row1['car2']); ?></h3>
                        </div>
                        </a>
                <?php } ?>
                 </div>
            </div>
<hr class="half-rule" style="width: 100px;margin: 40px auto;">            
            <!--top compare Ends-->
            <!-- EMI Calculator Widget START -->
            <script src="http://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script>
            <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;background:transparent;">
                <div id="ecww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;"></div>
                    <div id="ecww-more" style="background:#333;font:normal 13px/1 Helvetica, Arial, Verdana, Sans-serif;padding:10px 0;color:#FFF;text-align:center;width:100%;clear:both;margin:0;clear:both;float:left;">
                </div>
            </div><!-- EMI Calculator Widget END -->

                <hr class="half-rule" style="width: 100px;margin: 40px auto;">
            
        	<!-- SECTION: Footer -->
        	<footer class=bs-docs-footer id="contact">
                <div class=container>
                    <ul class=bs-docs-footer-links>
                        <li><a href='https://github.com/ezdine/sv--project/'>GitHub</a></li>
                        <li><a href='#'>Twitter</a></li>
                        <li><a href='#'>Facebook</a></li>
                        <li><a href='#' >About</a></li> 
                    </ul>
                </div>
            </footer>
            
            
        	<!-- END SECTION: Footer -->
        	<!-- JS CDNs -->
        	<script src="js/jquery.min.js"></script>
        	<script src="js/jquery-ui.min.js"></script>
        	<script src="js/video.min.js"></script>
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





