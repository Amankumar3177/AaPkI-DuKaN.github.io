<?php
include('db.php');
$id=$_GET['id'];

			  $up="update productorder set Status='Processing Order' where Id='$id'";
			  if(mysqli_query($conn,$up))
			  {
				 
				  header("location:NewOrder.php");
			  }
			  else
			  {
				   echo "";
			  }
		
	
?>