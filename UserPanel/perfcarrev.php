        <!--Reviews Page for cars selected from perfect car section  -->
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
                <meta charset="utf-8">
        		<link rel="stylesheet" type="text/css" href="overview/css/tabs.css" />
                <link rel="stylesheet" type="text/css" href="overview/css/styled.css"/>
                <link rel="stylesheet" type="text/css" href="overview/css/bootstrap.css"/>
                <link rel="stylesheet" type="text/css" href="css/styled.css"/>
                <link rel="stylesheet" href="css/styles.css">
          		<script src="overview/js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        	</head>
        	<body style="background:#2a2b30">
            
                
        			<section >
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
                            $type=$_GET['type'];
                            $brand=$_GET['brand'];
                            $car=$_GET['car'];
                            if((empty($type))||(empty($brand))||(empty($car)))
                            {
                                echo '<script type="text/javascript">window.history.go(-1);</script>';
                            }
                            $con=mysqli_connect('localhost','root','ezdine@123','carhunt');
                            $selected=mysqli_select_db($con,"car");
                            $query1="SELECT * FROM `car` WHERE `brand`='$brand' AND `type`='$type' AND `carid`='$car'";
                            $result1=mysqli_query($con, $query1);
                            $row2=mysqli_fetch_assoc($result1);
                            
                            ?>
        					<div class="content-wrap" style="color:white"><p style="color:#fff;">
        						<section id="section-iconfall-1"><p style="color:#fff;"></p>
                                <?php
                                    $img1=$row2['image_url'];
                                    $rating1=$row2['rating'];           
                                    $imageData = base64_encode(file_get_contents($img1));//encoding the scraped image in base64 format.
                                    $rateimage1=base64_encode(file_get_contents($rating1));  

                                ?>
                    

                    
                    <div >
                    <div class="row">
                        <div class="col-sm-6">
                                    <table class="">
                                       
                                        <tbody>


                                    <tr><th></th><td><?php echo '<img class="img-responsive" src="data:image/jpg;base64,'.$imageData.'">'; ?></td></tr>
                                    <tr><th></th><td><h1><?php echo ucfirst($row2['carid']); ?></h1></td></tr>
                                    <tr><th></th><td>INR  <?php echo $row2['price']; ?></td></tr>
                                    <tr><th></th><td><h5 style="color:#fff;margin:0 auto;">Rating</h5><br/><?php echo '<img src="data:image/png;base64,'.$rateimage1.'">'; ?></td></tr>

                               
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                <div class="col-sm-6">
                                    <iframe style="max-width:100%;"  width="560" height="300" src="<?php echo $row2['video']?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                                    </div>
                                </div>
                  
                                             
                                
                                </section>
        						<section id="section-iconfall-2">
                                
                                  <div class="table-con">
                                    <table class="table table-condensed">
                                       
                                        <tbody>


                                    <tr><th>MODEL</th><td><?php echo $row2["carid"];?></td></tr>
                                    <tr><th>TYPE</th><td><?php echo $row2["type"];?></td></tr>
                                    <tr><th>TRANSMISSION TYPE</th><td><?php echo $row2["transtype"];?></td></tr>
                                    <tr><th>TOP SPEED</th><td><?php echo $row2["topspeed"];?> kmph</td></tr>
                                    <tr><th>0-100 kmph</th><td><?php echo $row2["c0to100"];?> sec</td></tr>
                                    <tr><th>MILEAGE</th><td><?php echo $row2["mileage"];?> kmpl</td></tr>
                                    <tr><th>SEATING CAPACITY</th><td><?php echo $row2["seat"];?></td></tr>
                                    

                               
                                            
                                        </tbody>
                                    </table>
                                </div>
                                    
                                </section>
        						<section id="section-iconfall-3"><p style="color:#fff;">
                                              <div class="table-con">
                                    <table class="table table-condensed">
                                       
                                        <tbody>


                                    <tr><th>MODEL</th><td><?php echo $row2["carid"];?></td></tr>
                                    <tr><th>TORQUE</th><td><?php echo $row2["torq"];?> </td></tr>
                                    <tr><th>FUEL TYPE</th><td><?php echo $row2["ftype"];?></td></tr>
                                    <tr><th>FUEL CAPACITY</th><td><?php echo $row2["fcap"];?> Litres</td></tr>
                                    <tr><th>DISPLACEMENT</th><td><?php echo $row2["edisp"];?> cc</td></tr>
                                    <tr><th>ENGINE DESCRIPTION</th><td><?php echo $row2["edesc"];?></tr>
                                    <tr><th>ENGINE TYPE</th><td><?php echo $row2["etype"];?></td></tr>
                                    

                               
                                            
                                        </tbody>
                                    </table>
                                </div>
                                </p></section>
        						<section id="section-iconfall-4"><p style="color:#fff;">
                                <?php
                                
                                     $url1=$row2['review_url'];
                                     $html=file_get_html($url1);//scraping contents from the url.
                                     //Remove image tags from scraped contents
                                     foreach($html ->find('img') as $item) 
                                        {
                                            $item->outertext = '';
                                        }
                                     $html->save();
                                     foreach($html->find('div.article') as $key)//scraping contents from the div tag with class name "article".
                                        { 
                                            echo "REVIEW <br><br><br><h1>".ucfirst($row2['carid'])."</h1><br><br>".(string)$key."<br>";
                                        }
                        
                                        ?>                  
                                </p></section>
        						
        					</div><!-- /content -->
        				</div><!-- /tabs -->
        				
        			</section>
                    <hr class="half-rule" style="width: 100px;margin: 40px auto;">

        
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