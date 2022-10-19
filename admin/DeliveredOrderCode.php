<?php
include('db.php');
$id=$_GET['id'];

			  $up="update productorder set Status='Delivered Order' where Id='$id'";
			  if(mysqli_query($conn,$up))
			  {
				 
				  header("location:ProccessingOrder.php");
			  }
			  else
			  {	
				   echo "";
			  }
		
	
?>