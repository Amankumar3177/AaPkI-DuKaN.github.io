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

  <title>Log In</title>


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
          Login
		  
        </h2>
      </div>
      <div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-gradient-danger" >
		 <form class="user" action="user_login_code.php" method="post"><br>
									   <br>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="email" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit"  class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                       
                                       
									   
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
     Registration
		  
        </h2>
      </div>
      <div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-gradient-danger" >
		 <form class="user" action="user_Registetion_code.php" method="post"><br>
									   <br>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="email" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit"  class="btn btn-primary btn-user btn-block">
                                            Sign Up
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