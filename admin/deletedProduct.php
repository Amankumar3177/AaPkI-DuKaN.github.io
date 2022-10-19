<?php
include('db.php');
session_start();
$id=$_GET['id'];
 $del="delete from product where Id=$id";
 if(mysqli_query($conn,$del))
 {
	 

	
       echo "<script>window.location.href='viewProduct.php'; alert(' data deleted');</script>";
   
 }

?>
