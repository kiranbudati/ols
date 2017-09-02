<?php 
  session_start(); 
?>

<!doctype html> 
<html lang=''>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Learn Space</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="../css/user_info.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/fonts.css" rel="stylesheet" type="text/css">
      <link href="../css/fonts2.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Learn Space</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.php#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="../index.php">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../index.php#portfolio">Technologies</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../index.php#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../index.php#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Login</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!--Login-->

                        <div class="form">
      
                          <ul class="tab-group">
                            <li class="tab active"><a href="#signup">Sign Up</a></li>
                            <li class="tab"><a href="#login">Log In</a></li>
                          </ul>
                          
                          <div class="tab-content">
                            <div id="signup">   
                              <h1>Sign Up for Free</h1>
                              
                              <form action="signup_valid.php" name="signup" method="post">
                              
                              <div class="top-row">
                                <div class="field-wrap">
                                  <label>
                                    Full Name<span class="req">*</span>
                                  </label>
                                  <input type="text" name="fullname" required autocomplete="off" />
                                </div>
                            
                                <div class="field-wrap">
                                  <label>
                                    User Name<span class="req">*</span>
                                  </label>
                                  <input type="text" name="username" required autocomplete="off"/>
                                </div>
                              </div>
                        
                                <div class="field-wrap">
                                      <label>
                                        Mobile Number<span class="req">*</span>
                                      </label>
                                      <input type="text" name="phone" required autocomplete="off"/>
                                </div>
                              <div class="field-wrap">
                                <label>
                                  Email Address<span class="req">*</span>
                                </label>
                                <input type="text" name="email" required autocomplete="off"/>
                              </div>

                              <div class="field-wrap date" data-provide="datepicker" id='datetimepicker1'>
                              <span style="color: white">Date of Birth</span>
                                <input type="date" name="dob" required autocomplete="off"/>
                              </div>
                              
                              <div class="field-wrap">
                                <label>
                                  Set A Password<span class="req">*</span>
                                </label>
                                <input type="password" name="password" required autocomplete="off"/>
                              </div>
                              
                              <button type="submit" class="button button-block" name="submit" />Get Started</button>
                              
                              </form>

                            </div>
                            
                            <div id="login">

                              <h1>Welcome Back!</h1>
                          	    
                              <form action="login_valid.php" name="user_login" method="post">
                              
                                <div class="field-wrap">
                                <label>
                                  Email<span class="req">*</span>
                                </label>
                                <input type="text" name ="email" required autocomplete="off"/>
                              </div>
                              
                              <div class="field-wrap">
                                <label>
                                  Password<span class="req">*</span>
                                </label>
                                <input type="password" required name="password" autocomplete="off"/>
                              </div>
                              
                              <!--<p class="forgot"><a href="#">Forgot Password?</a></p>-->
                              
                              <button class="button button-block" name="login" />Log In</button>
                              
                              </form>

                            </div>
                                                     </div><!-- tab-content -->
                          
                    </div> <!-- /form -->
                      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                        <script src="../js/index.js"></script>

                
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>    

    <!-- jQuery -->
 <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>
        <script src="../js/index.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/freelancer.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/freelancer.min.js"></script>

	<!--
	<div class="container">
				<form action="login_valid.php" method="post" class="form-signin" >
					 <h2 class="form-signin-heading">Admin Login</h2>
						<label for="inputEmail" class="sr-only">User Name</label>
							<input class="form-control" placeholder="User Name" name="username" required autofocus>
						<label for="inputPassword" class="sr-only">Password</label>
    	    				<input type="password" name="password" class="form-control" placeholder="Password" required>
						<input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value=" Login ">
					<span><?php //echo $error; ?></span>
				</form>
	</div>
	-->     
</body>
</html>
