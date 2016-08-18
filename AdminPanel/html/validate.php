<?php
$user=$_POST['user'];
$pass=$_POST['pass'];

$username="admin";
$password="welcome";
if(($user==$username&&$pass==$password))
{
	session_start();
    $_SESSION['user'] = $user;
	header("Location:AdminPanel.php");
}
else
{
	header("Refresh:0;url:login.html");
	echo '<script type="text/javascript">alert("Incorrect username or password");window.history.go(-1);</script>';
}


?>