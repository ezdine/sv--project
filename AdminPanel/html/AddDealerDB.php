<?php

$d_name=$_POST['Dname'];
$d_brand=ucfirst($_POST['Dbrand']);
$d_state=ucfirst($_POST['Dstate']);
$d_location=ucfirst($_POST['Dlocation']);
$d_addr=ucfirst($_POST['Daddress']);
$d_contact=$_POST['Dcontact'];



$con=mysqli_connect('localhost','root','ezdine@123','carhunt');
if(!$con)
	{
		echo "connection failed";
		die();
	}
	elseif((!empty($d_name))&&(!empty($d_brand))&&(!empty($d_location))&&(!empty($d_contact))&&(!empty($d_contact))&&(!empty($d_state)))
	{
	  mysqli_select_db($con,"cardealer");
      $query1="INSERT INTO cardealer (name,brand,state,location,addr,contact) VALUES ('$d_name','$d_brand','$d_state','$d_location','$d_addr','$d_contact')";
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
          
        
        header("Refresh:0;url:AddDealerpage.php");
        echo '<script type="text/javascript">alert("Enter valid details");window.history.go(-1);</script>';
        

    }
    
?>