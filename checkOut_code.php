 <?php
 include('admin/db.php');
 $a=$_POST['name'];
 $b=$_POST['email'];
 $c=$_POST['Mobile'];
 $d=$_POST['Address'];
 $id=$_POST['id'];
 $userid=$_POST['userid'];
 
 
	$ins="INSERT INTO `productorder`(`product_id`, `userid`, `name`, `email`, `mobile`, `address`, `status`) VALUES ('$id','$userid','$a','$b','$c','$d','New Order')";
	 if(mysqli_query($conn,$ins))
   {
	
      echo "<script>window.location.href='index.php'; alert(' Thanks you for order');</script>";
   
   }else
	{
		echo "data not insert";			
   }
   

	
	?>