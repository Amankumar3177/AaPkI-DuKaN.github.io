<?php
include('admin/db.php');
$a=$_POST['email'];
$b=$_POST['password'];
 $sel="select * from login where email='$a'";
 $r=mysqli_query($conn,$sel);
 $k=mysqli_fetch_array($r,MYSQLI_BOTH);
 

 
  if($k=='')
  {
	  echo "This account is not registred with us";
  }
  else
  {
	  if($k['email']==$a)
	  {
		  if($k['password']==$b)
		  {
			  
				  session_start();
				  $_SESSION['user']=$a;
				  $_SESSION['Roll_Id']=$k['Roll_Id'];
				  $_SESSION['id']=$k['id'];
				  header("location:index.php");
			  
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