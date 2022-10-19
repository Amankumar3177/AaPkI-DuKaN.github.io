<?php
session_start();
include('admin/db.php');
 $a=$_SESSION['user'];
$b=$_SESSION['Roll_Id'];
//echo $a;
if($_SESSION['user']!="")
{
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>My Account</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="">
    <?php include('header.php');
	?>
    
  </div>


  <!-- product section -->

 
    <div class="container">
      <div>
        <h2>
          Profile
		  
        </h2>
      </div>
      <div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-gradient-danger" >
		<?php
		    include('admin/db.php');
                    $sel="select * from login where email='$a'";
					$r=mysqli_query($conn,$sel);
					$aa=0;
 while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
		{ $aa++;
		?>	
		 <form class="user" action="user_updateProfile_code.php" method="post"><br>
									   <br>
                                        <span>Name</span>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                            name="name" placeholder="Enter Name..." value="<?php echo $k['name'];?>">
                                        </div>
									  <span>Email</span>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="email" placeholder="Enter Email Address..."value="<?php echo $k['email'];?>">
                                        </div>
										 <span>Password</span>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="password" placeholder="" value="<?php echo $k['password'];?>">
                                        </div>
                                    
                                      
                                        <button type="submit"  class="btn btn-primary btn-user btn-block">
                                            Update
                                        </button>
                                       
                                       <?php
		}	
		?>
									   <br>
									   <br>
									   <br>
                                    </form>
                                    <hr>
		
		</div>
		<div class="col-sm-3"></div>
		</div>

        <div>
        <h2>
     My Order
		  
        </h2>
      </div>
      <div class="row">
		 <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>  
										<th>S.r</th>
                                             <th>product_id</th>
                                            <th>userid</th>
                                           
                                            <th>name</th>
                                            <th>email </th>
                                            <th>mobile</th>
                                            <th>address</th>
                                           <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>S.r</th>
                                             <th>product_id</th>
                                            <th>userid</th>
                                           
                                            <th>name</th>
                                            <th>email </th>
                                            <th>mobile</th>
                                            <th>address</th>
											<th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       							<?php
					
                    $sel="select * from productorder where userid='$a'";
					$r=mysqli_query($conn,$sel);
					$a=0;
		while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
		{ $a++;
					?>
													
                                                    <tr>
                                    
                                              
                                    
                                                   

         <td  class="text-center"><?php echo $a; ?></td>
       
		 
		 <td class="text-center"><?php echo $k['product_id']; ?></td>
		 <td class="text-center"><?php echo $k['userid']; ?></td>
		 <td class="text-center"><?php echo $k['name']; ?></td>
         <td  class="text-center"><?php echo $k['email']; ?></td>
         <td  class="text-center"><?php echo $k['mobile']; ?></td>
         <td  class="text-center"><?php echo $k['address']; ?></td>
		
		
		 <td class="text-center"><?php echo $k['Status']; ?></td>
	
		 
		 
     	
                                                    </tr>
      
							
													<?php
													
												   }
												   
												   
													?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   
		</div>

    </div>
  </section>

  <!-- end product section -->

  <!-- about section -->


<?php
include('footer.php');
?>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>
<?php	
}
else
{
	session_destroy();
	header('location:index.php');
}

?>