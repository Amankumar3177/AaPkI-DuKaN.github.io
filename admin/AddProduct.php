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
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-gradient-danger" >
		 <form class="user" action="AddProductCode.php" method="post" enctype="multipart/form-data"><br>
									   <br>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="name" placeholder="Product Name">
                                        </div>
										<div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="Price" placeholder="Product Price">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control form-control-user"
                                                name="uploadimage" placeholder="Password">
                                        </div>
										
										<div class="form-group">
                                            <textarea type="text" class="form-control form-control-user"
                                                name="Description" placeholder="Description">
												</textarea>
                                        </div>
                                        
                                        <button type="submit"  class="btn btn-primary btn-user btn-block">
                                            Sumbit
                                        </button>
                                       
                                       
									   
									   <br>
									   <br>
									   <br>
                                    </form>
                                    <hr>
		
		</div>
		<div class="col-sm-3"></div>
		</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
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