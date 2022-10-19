<?php
session_start();
include('db.php');
 $a=$_SESSION['user'];
$b=$_SESSION['Roll_Id'];
//echo $a;
if($_SESSION['user']!="" &&$_SESSION['Roll_Id']=="1")
{
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<?php include('sidebar.php');?>

       
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
<?php include('header.php');?>
               
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Dashboard</a>
                    </div>

                    <!-- Content Row -->
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Delivered Order</h1>
					

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Delivered Order</h6>
                        </div>
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
                                            <th>Stutas</th>
                                           
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
                                             <th>Stutas</th>
											
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       							<?php
					include('db.php');
                    $sel="select * from productorder where Status='Delivered Order'";
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
         <td  class="text-center"><?php echo $k['Status']; ?></td>
		
		
		
	
		 
		 
     	
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
                <!-- /.container-fluid -->


            <!-- Footer -->
             <?php
			include('footer.php');
			?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

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