 <?php
 include('admin/db.php');
 $b=$_POST['email'];
 $c=$_POST['password'];
 
   $sel="select * from login where email='$b'";
    $r=mysqli_query($conn,$sel);
		if(mysqli_fetch_array($r,MYSQLI_BOTH))
   {
	
       echo "<script>window.location.href='index.php'; alert(' alraedy this email');</script>";
   
   }
	else
	{
	$ins="INSERT INTO `login`(`email`,`password`,`Roll_Id`) VALUES ('$b','$c','2')";
	 if(mysqli_query($conn,$ins))
   {
	
      echo "<script>window.location.href='index.php'; alert(' Thanks you for Registration');</script>";
   
   }
   else
	{
		echo "Operataion failed please try again";			
   }
   
	}
	
	?>