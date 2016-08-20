<?php

$d_name=$_POST['Dname'];
$d_brand=strtolower($_POST['Dbrand']);
$d_state=strtolower($_POST['Dstate']);
$d_location=strtolower($_POST['Dlocation']);
$d_contact=$_POST['Dcontact'];



$con=mysqli_connect('localhost','root','','carhunt');
if(!$con)
	{
		echo "connection failed";
		die();
	}
	elseif((!empty($d_name))&&(!empty($d_brand))&&(!empty($d_location))&&(!empty($d_contact))&&(!empty($d_contact))&&(!empty($d_state))&&(is_numeric($d_contact)))
	{
	  mysqli_select_db($con,"cardealer");
      $query1="INSERT INTO cardealer (name,brand,state,location,contact) VALUES ('$d_name','$d_brand','$d_state','$d_location','$d_contact')";
      if(mysqli_query($con,$query1))
      { 
      	session_start();
      	$_SESSION['msg']='Insertion Successfull';
        header('Location:AddDealerpage.php');
        mysqli_close($con);
      } 
      else
      {
      	header("Refresh:0;url:AddDealerpage.php");
        echo '<script type="text/javascript">alert("Insertion Failed!!");window.history.go(-1);</script>';
      }
	}
	else
    {
          
        {
        header("Refresh:0;url:AddDealerpage.php");
        echo '<script type="text/javascript">alert("Enter valid details");window.history.go(-1);</script>';
        }

    }
    
?>
