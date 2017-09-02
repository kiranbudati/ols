<?php
include('loginvalid.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: user.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Learn Space</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.php">Learn Space</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Portfolio Grid Section -->

    <!-- About Section -->
 
    <!-- Contact Section -->
    <section id="login-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Login</h2>
                    <hr class="star-primary">
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                    <!--login-->
                          <div class="form">
      
                          <ul class="tab-group">
                            <li class="tab active"><a href="#signup">Sign Up</a></li>
                            <li class="tab"><a href="#login">Log In</a></li>
                          </ul>
                          
                          <div class="tab-content">
                            <div id="signup">   
                              <h1>Sign Up for Free</h1>
                              
                              <form action="signupvalid.php" method="post">
                              
                              <div class="top-row">
                                <div class="field-wrap">
                                  <label>
                                    First Name<span class="req">*</span>
                                  </label>
                                  <input type="text" required autocomplete="off" />
                                </div>
                            
                                <div class="field-wrap">
                                  <label>
                                    Last Name<span class="req">*</span>
                                  </label>
                                  <input type="text"required autocomplete="off"/>
                                </div>
                              </div>

                                <div class="field-wrap">
                                  <label>
                                    Mobile Number<span class="req">*</span>
                                  </label>
                                  <input type="text"required autocomplete="off"/>
                                </div>
                              <div class="field-wrap">
                                <label>
                                  Email Address<span class="req">*</span>
                                </label>
                                <input type="email"required autocomplete="off"/>
                              </div>

                              
                              <div class="field-wrap">
                                <label>
                                  Set A Password<span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off"/>
                              </div>
                              
                              <button type="submit" class="button button-block"/>Get Started</button>
                              
                              </form>

                            </div>
                            
                            <div id="login">   
                              <h1>Welcome Back!</h1>
                              
                              <form action=""  name="login" method="post">
                              
                                <div class="field-wrap">
                                <label>
                                  Email Address<span class="req">*</span>
                                </label>
                                <input type="email" name="username" required autocomplete="off"/>
                              </div>
                              
                              <div class="field-wrap">
                                <label>
                                  Password<span class="req">*</span>
                                </label>
                                <input type="password" name ="password" required autocomplete="off"/>
                              </div>
                              
                              <p class="forgot"><a href="#">Forgot Password?</a></p>
                              
                              <button class="button button-block" name="submit" />Log In</button>
                              
                              </form>

                            </div>
                            
                          </div><!-- tab-content -->
      
            </div> 
<!-- /form -->

                </div>
                
            </div>
       </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
               <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Orange Reseach Labs
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
        <script src="js/index.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
