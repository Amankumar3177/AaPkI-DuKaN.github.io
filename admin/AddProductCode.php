<?php

include('db.php');

 $a=$_POST['name'];
 $b=$_POST['Price'];
 $c=$_POST['Description'];
 
 
 $q=$_FILES['uploadimage']['name'];
    	 
   $qq=$_FILES['uploadimage']['tmp_name'];
     $loc="ProductImage/";
   $ins="insert into product(Name,Price,Image,Description) values('$a','$b','$q','$c')";
   mysqli_query($conn,$ins);
   
    move_uploaded_file($qq,$loc.$q);
     echo "<script>window.location.href='AddProduct.php'; alert('success')</script>";
   ?>
   