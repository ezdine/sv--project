<!--Page to display dealers -->
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
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
	<link rel="stylesheet" type="text/css" href="css/styled.css"/>

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

    <div class="container" id="selectcar" >

    <?php
       include_once ('simple_html_dom.php');
       $brand=$_POST['first-choice3'];
       $location=$_POST['third-choice3'];


       if((is_null($brand))||(is_null($location)))
       {
       	header('Location:index.php');

       }
       $con=mysqli_connect('localhost','root','ezdine@123','carhunt');
       $selected=mysqli_select_db($con,"cardealer");

       $query1="SELECT * FROM `cardealer` WHERE `brand`='$brand' AND `location`='$location'";
       $result1=mysqli_query($con, $query1);



      ?>

	<br/><br/><br/>
	<div class="row">
      <?php

       while ($row1=mysqli_fetch_assoc($result1))
      {
      ?>

      <div class="col-xs-12 col-md-3 well" style="color:#000;text-align:left;font-size:25px;margin:1em;">
       	<h5>NAME : <?php echo ucfirst($row1["name"]);?></h5><br/>
	    <h5>BRAND : <?php echo ucfirst($row1["brand"]);?></h5><br/>
	    <h5>ADDRESS : <?php echo ucfirst($row1["addr"]);?></h5><br/>
       	<h5>LOCATION : <?php echo ucfirst($row1["location"]);?></h5><br/>
       	<h5>STATE : <?php echo ucfirst($row1["state"]);?></h5><br/>
  	   	<h5>CONTACT : <?php echo $row1["contact"];?></h5>

  	   	<form action="http://maps.google.com/maps" method="get" target="_blank">
 			<br/>
   			<input type="hidden" class="form-control" name="saddr" id="saddr"/>
   			<input type="hidden" name="daddr" value="<?php echo $row1['name']. ' '.$row1['brand'].' '.$row1['addr'].''.$row1['location'].' '.$row1['state']; ?>" />
   			<center><input type="submit" class="btn btn-primary" value="Get directions" /></center>
		</form>
  	  </div>


  <?php } ?>
       </div>



			</div>
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

<?php
	$useragent=$_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
			echo "<script type=\"text/javascript\">
	 			var onSuccess = function(position) {

						document.getElementById(\'saddr\').value =position.coords.latitude+\'°,\'+position.coords.longitude+\'°\';
				};


				navigator.geolocation.getCurrentPosition(onSuccess);



					</script>";
?>
</body>

</html>
