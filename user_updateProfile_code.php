<?php
include('admin/db.php');
$name=$_POST['name'];
$email=$_POST['email'];
echo $email; 
$password=$_POST['password'];

			  $up="update login set name='$name', password='$password' where email='$email'";
			  if(mysqli_query($conn,$up))
			  {
				 
				 header("location:mycount.php");
				  
			  }
			  else
			  {
				   echo "";
			  }
		
	
?>