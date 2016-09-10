    <!--Compare results page-->
        <!DOCTYPE html>
        <html lang="en" class="no-js">
        	<head>
                <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
                <link rel="icon" href="favicon.ico" type="image/x-icon">
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>CarHunt</title>
                <meta name="description" content="">
                <meta name="keywords" content="" />
                <meta name="author" content="Infinity" />
        		<link rel="stylesheet" type="text/css" href="overview/css/tabs.css" />
                <link rel="stylesheet" type="text/css" href="overview/css/styled.css"/>
                <link rel="stylesheet" type="text/css" href="overview/css/bootstrap.css"/>
                <link rel="stylesheet" type="text/css" href="css/styled.css"/>
                <link rel="stylesheet" href="css/styles.css">
          		<script src="overview/js/modernizr.custom.js"></script>
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
                                <li class="subscribe"><a href="#contact" style="color:white">Contact</a></li>
                                
                            </ul>
                        </div>
                        
                    </div>              
                </div>
            </div>
        </div>
                
        			<section class="container" style="border:2px solid #1F1F1F;background:#1F1F1F;border-radius:20px;padding:3em; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
        				<div class="tabs tabs-style-iconfall">
        					<nav>
        						<ul>
        							<li><a href="#section-iconfall-1" class="icon icon-home"><span>Overview</span></a></li>
        							<li><a href="#section-iconfall-2" class="icon icon-display"><span>Features</span></a></li>
        							<li><a href="#section-iconfall-3" class="icon icon-tools"><span>Specification</span></a></li>
        							
                                    <li><a href="#section-iconfall-4" class="icon icon-joy"><span>Review</span></a></li>
        						</ul>
        					</nav>
                            <?php 
                            include_once ('simple_html_dom.php');
                            $type1=$_GET['first-choice'];
                            $brand1=$_GET['second-choice'];
                            $car1=$_GET['third-choice'];
                            $type2=$_GET['first-choice2'];
                            $brand2=$_GET['second-choice2'];
                            $car2=$_GET['third-choice2'];
                            
                            
                            $con=mysqli_connect('localhost','root','ezdine@123','carhunt');
                            $selected=mysqli_select_db($con,"car");
                            $con=mysqli_connect('localhost','root','ezdine@123','carhunt');
                            $selected=mysqli_select_db($con,"car");
                            
                            $query1="SELECT * FROM `car` WHERE `brand`='$brand1' AND `type`='$type1' AND `carid`='$car1'";
                            $query2="SELECT * FROM `car` WHERE `brand`='$brand2' AND `type`='$type2' AND `carid`='$car2'";
                            $result1=mysqli_query($con, $query1);
                            $result2=mysqli_query($con, $query2);
                            $row1=mysqli_fetch_assoc($result1);
                            $row2=mysqli_fetch_assoc($result2);
                            
                            
                            ?>
        					<div class="content-wrap" style="color:white"><p style="color:#fff;">
        						<section id="section-iconfall-1"><p style="color:#fff;"></p>
                                <?php
                                    $img1=$row1['image_url'];
                                    $rating1=$row1['rating'];           
                                    $imageData1 = base64_encode(file_get_contents($img1));//encoding the scraped image in base64 format.
                                    $rateimage1=base64_encode(file_get_contents($rating1));
                                    $img2=$row2['image_url'];
                                    $rating2=$row2['rating'];           
                                    $imageData2 = base64_encode(file_get_contents($img2));//encoding the scraped image in base64 format.
                                    $rateimage2=base64_encode(file_get_contents($rating2));  

                                     $url1=$row1['review_url'];
                                     $url2=$row2['review_url'];
                                     $html1=file_get_html($url1);//scraping contents from the url.
                                     //Remove image tags from scraped contents
                                     $url2=$row2['review_url'];
                                     $html2=file_get_html($url2);
                                     foreach($html1 ->find('img') as $item) 
                                        {
                                            $item->outertext = '';
                                        }
                                     $html1->save();
                                    


                                        foreach($html2 ->find('img') as $item) 
                                        {
                                            $item->outertext = '';
                                        }
                                     $html2->save();

                                ?>
                    

                    <div >
                    <div class="row">
                        <div class="col-sm-6">
                                    <table class="">
                                       
                                        <tbody>


                                    <tr><th></th><td><?php echo '<img style="max-width:100% ;height:300px" src="data:image/jpg;base64,'.$imageData1.'">'; ?></td></tr>
                                    <tr><th></th><td><h1><?php echo ucfirst($row1['carid']); ?></h1></td></tr>
                                    <tr><th></th><td>INR  <?php echo $row1['price']; ?></td></tr>
                                    <tr><th></th><td><h5 style="color:#fff;margin:0 auto;">Rating</h5><br/><?php echo '<img src="data:image/png;base64,'.$rateimage1.'">'; ?></td></tr>

                               
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                <div class="col-sm-6">
                                    <table class="">
                                       
                                        <tbody>class="img-responsive"


                                    <tr><th></th><td><?php echo '<img class="img-responsive" src="data:image/jpg;base64,'.$imageData2.'">'; ?></td></tr>
                                    <tr><th></th><td><h1><?php echo ucfirst($row2['carid']); ?></h1></td></tr>
                                    <tr><th></th><td>INR  <?php echo $row2['price']; ?></td></tr>
                                    <tr><th></th><td><h5 style="color:#fff;margin:0 auto;">Rating</h5><br/><?php echo '<img src="data:image/png;base64,'.$rateimage2.'">'; ?></td></tr>

                               
                                            
                                        </tbody>
                                    </table>
                                </div>
                                    </div>
                                </div>
                                             
                                
                                </section>
        						<section id="section-iconfall-2">
                                
                                  <div class="table-con">
                                    <table class="table table-condensed">
                                       
                                        <tbody>


                                    <tr><th>MODEL</th><td><?php echo ucfirst($row1["carid"]);?></td><td><?php echo ucfirst($row2["carid"]);?></td></tr>
                                    <tr><th>TYPE</th><td><?php echo $row1["type"];?></td><td><?php echo $row2["type"];?></td></tr>
                                    <tr><th>TRANSMISSION TYPE</th><td><?php echo $row1["transtype"];?></td><td><?php echo $row2["transtype"];?></td></tr>
                                    <tr><th>TOP SPEED</th><td><?php echo $row1["topspeed"];?> kmph</td><td><?php echo $row2["topspeed"];?> kmph</td></tr>
                                    <tr><th>0-100 kmph</th><td><?php echo $row1["c0to100"];?> sec</td><td><?php echo $row2["c0to100"];?> sec</td></tr>
                                    <tr><th>MILEAGE</th><td><?php echo $row1["mileage"];?> kmpl</td><td><?php echo $row2["mileage"];?> kmpl</td></tr>
                                    <tr><th>SEATING CAPACITY</th><td><?php echo $row1["seat"];?></td><td><?php echo $row2["seat"];?></td></tr>
                                    

                               
                                            
                                        </tbody>
                                    </table>
                                </div>
                                    
                                </section>
        						<section id="section-iconfall-3"><p style="color:#fff;">
                                              <div class="table-con">
                                    <table class="table table-condensed">
                                       
                                        <tbody>


                                    <tr><th>MODEL</th><td><?php echo ucfirst($row1["carid"]);?></td><td><?php echo ucfirst($row2["carid"]);?></td></tr>
                                    <tr><th>TORQUE</th><td><?php echo $row1["torq"];?></td><td><?php echo $row2["torq"];?></td></tr>
                                    <tr><th>FUEL TYPE</th><td><?php echo $row1["ftype"];?></td><td><?php echo $row2["ftype"];?></td></tr>
                                    <tr><th>FUEL CAPACITY</th><td><?php echo $row1["fcap"];?> Litres</td><td><?php echo $row2["fcap"];?> Litres</td></tr>
                                    <tr><th>DISPLACEMENT</th><td><?php echo $row1["edisp"];?> cc</td><td><?php echo $row2["edisp"];?> cc</td></tr>
                                    <tr><th>ENGINE DESCRIPTION</th><td><?php echo $row1["edesc"];?></td><td><?php echo $row2["edesc"];?></td></tr>
                                    <tr><th>ENGINE TYPE</th><td><?php echo $row1["etype"];?></td><td><?php echo $row2["etype"];?></td></tr>
                                    

                               
                                            
                                        </tbody>
                                    </table>
                                </div>
                                </p></section>
        						<section id="section-iconfall-4"><p style="color:#fff;">
                                <?php

                                      foreach($html1->find('div.article') as $key)//scraping contents from the div tag with class name "article".
                                        { 
                                            echo "REVIEW <br><br><br><h1>".ucfirst($row1['carid'])."</h1><br><br>".(string)$key."<br>";
                                        }
                                
                                     
                                     foreach($html2->find('div.article') as $key)//scraping contents from the div tag with class name "article".
                                        { 
                                            echo "<br><br><br><h1>".ucfirst($row2['carid'])."</h1><br><br>".(string)$key."<br>";
                                        }
                        
                                        ?>                  
                                </p></section>
        						
        					</div><!-- /content -->
        				</div><!-- /tabs -->
        				
        			</section>
                    <hr class="half-rule" style="width: 100px;margin: 40px auto;">

        <!-- SECTION: Footer -->
        <footer class="bs-docs-footer" id="contact">
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
                <script src="overview/js/cbpFWTabs.js"></script>
        		<script>
        			(function() {

        				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
        					new CBPFWTabs( el );
        				});

        			})();
        		</script>
        	</body>
        </html>