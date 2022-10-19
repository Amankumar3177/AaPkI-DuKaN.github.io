<?php
include('db.php');
$a=$_POST['email'];
$b=$_POST['password'];
 $sel="select * from login where email='$a'";
 $r=mysqli_query($conn,$sel);
 $k=mysqli_fetch_array($r,MYSQLI_BOTH);
 date_default_timezone_set("asia/kolkata");
 $datetime=date("d/m/y").":::".date("h:i:sa");
 
  if($k=='')
  {
	  echo "data not fetch";
  }
  else
  {
	  if($k['email']==$a)
	  {
		  if($k['password']==$b)
		  {
			  $up="update login set logindatetime='$datetime',status='true' where email='$a'";
			  if(mysqli_query($conn,$up))
			  {
				  session_start();
				  $_SESSION['user']=$a;
				  $_SESSION['Roll_Id']=$k['Roll_Id'];
				  $_SESSION['id']=$k['id'];
				  header("location:dashboard.php");
			  }
			  else
			  {
				   echo "login failed";
			  }
		  }
		  else
		  {
			  echo "password not match";
		  }
	  }
	  else
	  {
		  echo "email id worng";
	  }
  }
?>