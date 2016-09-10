<?php

$car_mod=ucfirst($_POST['carmodel']);
$car_type=ucfirst($_POST['cartype']);
$car_brand=ucfirst($_POST['carbrand']);
$car_price=$_POST['carprice'];
$rURL=$_POST['rev_url'];
$iURL=$_POST['img_url'];
$car_mile=$_POST['carmileage'];
$car_torq=$_POST['cartorque'];
$c0to100=$_POST['c0to100'];
$rat=$_POST['rat_url'];

$fcap=$_POST['fcapacity'];
$ftype=ucfirst($_POST['ftype']);
$seat=$_POST['seat'];
$transtype=ucfirst($_POST['trantype']);
$edisp=$_POST['edisp'];
$topspeed=$_POST['topspeed'];
$edesc=$_POST['edesc'];
$etype=$_POST['etype'];
$usage=strtolower($_POST['usage']);
$video_url=$_POST['video_url'];


$con=mysqli_connect('localhost','root','ezdine@123','carhunt');
if(!$con)
	{
		echo "connection failed";
		die();
	}
	elseif((!empty($fcap))&&(!empty($ftype))&&(!empty($seat))&&(!empty($transtype))&&(!empty($edisp))&&(!empty($topspeed))&&(!empty($edesc))&&(!empty($etype))&&(!empty($car_mod))&&(!empty($car_type))&&(!empty($car_brand))&&(!empty($car_price))&&(!empty($rURL))&&(!empty($iURL))&&(!empty($car_mile))&&(!empty($car_torq))&&(!empty($c0to100)))
	{
	  mysqli_select_db($con,"car");
      $query1="INSERT INTO car  (carid,type,brand,price,cusage,rating,video,review_url,image_url,mileage,torq,c0to100,fcap,ftype,seat,transtype,edisp,topspeed,edesc,etype) VALUES ('$car_mod','$car_type','$car_brand','$car_price','$usage','$rat','$video_url','$rURL','$iURL',$car_mile,'$car_torq','$c0to100','$fcap','$ftype','$seat','$transtype','$edisp','$topspeed','$edesc','$etype')";
      if(mysqli_query($con,$query1))
      { 
      	session_start();
      	$_SESSION['msg']='Insertion Successfull';
        header('Location:AddCarpage.php');
        mysqli_close($con);
      } 
      else
      {
       
      header("Refresh:0;url:AddCarpage.php");
      echo '<script type="text/javascript">alert("Insertion Failed!!");window.history.go(-1);</script>'; 
      }
	}
	else
    {
        header("Refresh:0;url:AddCarpage.php");
        echo '<script type="text/javascript">alert("Fields cannot be empty");window.history.go(-1);</script>';

    }
    
?>