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
	<title>CarHunt|Home</title>
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
    <link rel="stylesheet" type="text/css" href="css/compare/component.css"/>
    <link rel="stylesheet" type="text/css" href="css/styled.css"/>
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/vicons-font.css"/>
    <script src="js/nouislider.min.js"></script>
	<script src="js/modernizr.custom.js"></script>


</head>

<body style="background:#414A52">
	<div class="container-fluid">
		<div class="row">
			<div class="header-nav-wrapper">
				<div class="logo">
					<a href="#"><img src="img/logo.png"></a>
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
								<h1 class="wp1 left-top">Sports Car Legends</h1>
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
    
    
    
 <div class="container-fluid details" id="selectcar">
     <section class="compare-section bg-1">
         
         <div class="pricing compare-inner">
         <!--Find Cars-->
            <div class="pricing__item price1">
            <center><h2 style="font-size:2em;">Get Your Perfect Car</h2></center><br/>
                <h2 style="font-size:20px;">Select price range in Lakhs</h2><br/>
			<div id="skipstep"></div><br/><br/><br/>
                
                 <span class="example-val" id="skip-value-lower"></span>
			     <span class="example-val" id="skip-value-upper"></span><br/><br/>
			<!--slider script-->
                  <script>
                      var skipSlider = document.getElementById('skipstep');

                      noUiSlider.create(skipSlider, {
                        range: {
                        'min': 0,
                        '10%': 10,
                        '20%': 20,
                        '30%': 30,
		                '40%': 40,
                        '50%': 50,
                        '60%': 60,
                        '70%': 70,
		                '80' : 80,
                        '90%': 90,
                        'max': 100
                    },
                    snap: true,
                    start: [20, 80]
                    });
                  </script>			
                  <script>
                    var skipValues = [
	               document.getElementById('skip-value-lower'),
	               document.getElementById('skip-value-upper')
                    ];

                    skipSlider.noUiSlider.on('update', function( values, handle ) {
	                skipValues[handle].innerHTML = values[handle];
                    });
                  </script>

                <!--slider script ends-->
                <h2 style="font-size:20px;">Select Type</h2><br/>
                <select class="form-control" name="second-choice" id="brand-choice" onchange="get_data()">
                          <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="muv">MUV</option>
                            <option value="coupe">Coupe</option>  
                        </select><br/><br/>
                <h2 style="font-size:20px;">Select Brand</h2><br/>
                <select class="form-control" name="second-choice" id="brand-choice" onchange="get_data()">
                            <option value="" selected="">Brand</option>
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select><br/><br/>
                <center>
                    
                    <button class="button button--shikoba button--round-l"><i class="button__icon icon icon-search"></i><span>Search</span></button></center><br/>
            </div>
         <!--Find Cars ends-->
         
         <!--Get Review-->
        <div class="pricing__item price1">
        <form action="getreview.php" method="post">
                <center><h2>Get Review</h2></center><br/><br/><br/>
                <div role="form" class="forms">
                    <h2 style="font-size:20px;">Select Type</h2><br/>
                        <div class="form-group">
                        <select class="form-control" name="first-choice4" id="first-choice4">
                            <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
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
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select>  
                      </div><br/>
                        <div class="form-group">
                        <h2 style="font-size:20px;">Select Car</h2><br/>
                        <select class="form-control" id="third-choice4" name="third-choice4">
                            <option value="" selected="">Car Name</option>
                            
                        </select>  
                        </div><br/>
                    <center><button class="button button--shikoba button--round-l"><i class="button__icon icon icon-forward"></i><span>Go</span></button></center><br/>
                </div>
                </form>
            </div>
         <!--Get Review ends-->
         
         <!--Find Dealer-->
             
        <div class="pricing__item price1 ">
        <form action="finddealerpage.php" method="post">
                    <center><h2 style="font-size:35px;">Find Your Dealer</h2></center><br/><br/><br/>
             <h2 style="font-size:20px;">Select Brand</h2><br/>
                        <div class="form-group">
                        <select class="form-control" name="first-choice3" id="first-choice3">
                            <option value="" selected="">Brand</option>
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select>  
                      </div><br/>
             <h2 style="font-size:20px;">Select State</h2><br/>
                        <div class="form-group">
                        <select class="form-control" name="second-choice3" id="second-choice3" onchange="get_data3()">
                            <option value="" selected="">State</option>
                            <option value="kerala">Kerala</option>
                            <option value="tamil nadu">Tamil Nadu</option>
                            <option value="karnataka">Karnataka</option>
                            <option value="andhra pradesh">Andhra Pradesh</option>
                            <option value="goa">Goa</option>
                            <option value="maharashtra">Maharashtra</option>

                        </select>  
                      </div><br/>
             <h2 style="font-size:20px;">Select Location</h2><br/>
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
    
    
    <!-- Working Properly -->
    
     <div class="container-fluid">
       <form action="resultpage.php" method="post"> 
        <section class="compare-section bg-1">
            <h2 class="compare-section__title">Compare</h2><br/><br/><br/><br/><br/><br/>
            <div class="pricing compare-inner">
                
               <div class="pricing__item animate wp2">
                <span class="big">+</span><br/>
                    <div role="form" class="forms">
                        <div class="form-group">
                        <select class="form-control" name="first-choice" id="first-choice">
                            <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
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
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
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
                        <select class="form-control" id="first-choice2" name="first-choice2">
                            <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
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
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
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
    
    <hr class="half-rule" style="width: 100px;margin: 40px auto;">
    
    
	<!-- SECTION: Footer -->
	<footer class=bs-docs-footer>
        <div class=container>
            <ul class=bs-docs-footer-links>
                <li><a href='#'>GitHub</a></li>
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

<!--Ajax scripts for populating the car models dropdown lists
get_data() populates the first box and get_data2() populates the second box -->	

<!--Ajax script for populating the compare dropdown lists on find compare section-->
	<script type="text/javascript">


	function get_data()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(xhttp.readyState == 4 && xhttp.status == 200)
			{
				document.getElementById("third-choice").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice").value+"&first-choice="+document.getElementById("first-choice").value, true);
		xhttp.send();


	}
</script>


<script type="text/javascript">


	function get_data2()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(xhttp.readyState == 4 && xhttp.status == 200)
			{
				document.getElementById("third-choice2").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice2").value+"&first-choice="+document.getElementById("first-choice2").value, true);
		xhttp.send();

		if ((document.getElementById('second-choice2').value!="")&&(document.getElementById('second-choice').value!="")&&(document.getElementById('first-choice').value!="")&&(document.getElementById('first-choice2').value!=""))
			 document.getElementById("submit").disabled=false;
		else
			document.getElementById("submit").disabled=true;
	}
</script>
    

 <!--Ajax script for populating the dealer dropdown list on find dealer section-->
    <script type="text/javascript">


    function get_data3()
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(xhttp.readyState == 4 && xhttp.status == 200)
            {
                document.getElementById("third-choice3").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "getter2.php?second-choice3="+document.getElementById("second-choice3").value+"&first-choice3="+document.getElementById("first-choice3").value, true);
        xhttp.send();

        if ((document.getElementById('second-choice3').value!="")&&(document.getElementById('first-choice3').value!=""))
             document.getElementById("search").disabled=false;
        else
            document.getElementById("search").disabled=true;


    }
</script>

<!--Ajax script for populating the car models dropdown list on get review section-->
<script type="text/javascript">


    function get_data4()
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(xhttp.readyState == 4 && xhttp.status == 200)
            {
                document.getElementById("third-choice4").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice4").value+"&first-choice="+document.getElementById("first-choice4").value, true);
        xhttp.send();


    }
</script>
   
   





</body>

</html>
