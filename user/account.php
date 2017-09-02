<?php
   include('session.php');
?>

<?php 
    
    $user = mysql_query("SELECT * FROM users WHERE phone = '$login_phone' AND email ='$login_email' ");

            $user_fetch = mysql_fetch_array($user);

            $user_name = $user_fetch['username'];
            $user_fullname = $user_fetch['fullname'];    
            $user_email = $user_fetch['email'];
            $user_phone = $user_fetch['phone'];
            $user_password = $user_fetch['password'];
            $user_joined = $user_fetch['joined'];
    
?>

<?php 

    $likes_fetch = mysql_query("SELECT * FROM votes WHERE user_email = '$login_email' AND vote= 1");
 
    $all_likes=mysql_num_rows($likes_fetch);

    $dislikes_fetch = mysql_query("SELECT * FROM votes WHERE user_email = '$login_email' AND vote= 0");

    $all_dislikes=mysql_num_rows($dislikes_fetch);
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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
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

    <style type="text/css">
        
        .votes-likes{
            background-color: green;
            color: white;
            font-weight: bold;
        }

        .votes-dislikes{
            background-color: red;
            color: white;
            font-weight: bold;
        }

        .fa-heart-o:before{
            content:"\f08a"
        }
    </style>

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
                    
                    <li class="page-scroll" >
                        <a href="user.php" >Home</a>
                    </li>

                    <li class="page-scroll">
                        <a href="tutorials.php">Tutorials</a>
                    </li>
                    <li class="page-scroll">
                        <a href="blog.php">Blog</a>
                    </li>
                   <li class="page-scroll">
                        <a href="components.php">Components</a>
                    </li>
                    <li class="light-blue dropdown-modal" style="background-color: #18BC9C ">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    <?php echo $row['username']; ?>
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close" style="background-color: #2C3E50">
                          
                                <li>
                                    <a href="account.php">
                                        <i class="ace-icon fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="logout.php">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <br>
    <section class="container">
        <div class="row">
            <div class="col-sm-8"> 
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Account Settings</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row user_info">
                        <div class="col-md-3 left_det">
                            <span class="info-name glyphicon glyphicon-user"> Username</span>
                        </div>
                        <div class="col-md-6">
                            <span class="info-value"><?php echo $user_name ?></span>
                        </div>
                    </div>

                    <div class="row user_info">
                        <div class="col-md-3 left_det">
                            <span class="info-name glyphicon glyphicon-user"> Full Name</span>
                        </div>
                        <div class="col-md-6">
                            <span class="info-value"><?php echo $user_fullname ?></span>
                        </div>
                    </div>
                    <div class="row user_info">
                        <div class="col-md-3 left_det">
                            <span class="info-name ">Password</span>
                        </div>
                        <div class="col-md-6">
                            <span class="info-value "><?php echo $user_password ?></span>
                        </div>
                    </div>

                    <div class="row user_info">
                        <div class="col-md-3 left_det">
                            <span class="glyphicon glyphicon-envelope info-name"> Email</span>
                        </div>
                        <div class="col-md-6">
                            <span class="info-value"><?php echo $user_email ?></span>
                        </div>
                    </div>

                    <div class="row user_info">
                        <div class="col-md-3 left_det">
                            <span class="glyphicon glyphicon-phone info-name"> Phone</span>
                        </div>
                        <div class="col-md-6">
                            <span class="info-value"><?php echo $user_phone ?></span>
                        </div>
                    </div>
                    
                    <div class="row user_info">
                        <div class="col-md-3 left_det">
                            <span class="info-name glyphicon glyphicon-calendar"> Joined</span>
                        </div>
                        <div class="col-md-6">
                            <span class="info-value"><?php echo $user_joined ?></span>
                        </div>
                    </div>


                  </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Votes</h3>
                  </div>
                  <div class="panel-body col-lg-offset-2">
   
                    <span class="votes-likes btn">Likes&nbsp;<span class="glyphicon glyphicon-thumbs-up">
                        <?php echo $all_likes; ?>
                     </span></span>

                    <span class="votes-dislikes btn">Dis-Likes <span class="glyphicon glyphicon-thumbs-down">
                        <?php echo $all_dislikes; ?>
                            
                    </span></span>

                  </div>
                </div>
                <div class="panel panel-primary ">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel info</h3>
                  </div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
                <div class="panel panel-primary ">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel info</h3>
                  </div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10">
                <div class="panel panel-primary ">
                  <div class="panel-heading">
                    <h3 class="panel-title">Panel info</h3>
                  </div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
            </div>
        </div>
    </section>

   
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

</body>

</html>



<!--
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>
-->