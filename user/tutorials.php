<?php
    session_start();

    if( !isset($_SESSION['user_email']) ){
    header("location:index.php");
    exit();
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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    hr{
      background-color: black;
    }
      .left_content{
        word-wrap: break-word;   
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
                    
                    <li class="page-scroll">
                        <a href="index.php">Home</a>
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

                          <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    <?php echo $_SESSION['user_name'] ?>
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

<!--NavBar End -->

    <!--page content start -->

  <section id="search">
  <div style="padding: 30px">
            <ul class="breadcrumb">
              <li><a href="user.php">Home</a></li>
              <li class="active">Tutorials</li>
            </ul>

            <ul class="nav nav-tabs">
          <li class="active "><a href="#Embedded" data-toggle="tab" aria-expanded="true">Embedded</a></li>
          <li class=""><a href="#IoT" data-toggle="tab" aria-expanded="false">IoT</a></li>
          <li class=""><a href="#Robotics" data-toggle="tab" aria-expanded="false">Robotics</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="Embedded">
            <div class="right-content">
                <div class="right-content-heading">
                    <div class="right-content-heading-left">
                        <h3>Latest Embedded Tutorials</h3>
                    </div>
                    <div class="right-content-heading-right">
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#" target="_blank"> </a></li>
                                <li><a class="twitter" href="#" target="_blank"></a></li>
                                <li><a class="googleplus" href="#" target="_blank"></a></li>
                                <li><a class="pinterest" href="#" target="_blank"></a></li>
                                <li><a class="dribbble" href="#" target="_blank"></a></li>
                                <li><a class="vimeo" href="#" target="_blank"></a></li>
                            </ul>
                    </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="content-grids">
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum1.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum2.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum3.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="singlepage.html"><img src="images/gridallbum4.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum5.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum6.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum7.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="singlepage.html"><img src="images/gridallbum8.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum9.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum10.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum11.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="singlepage.html"><img src="images/gridallbum1.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="clear"> </div>
                    <!---start-pagenation---->
                    <div class="pagenation">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                    <div class="clear"> </div>
                    <!---End-pagenation-->
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="Robotics">
            <div class="right-content">
                <div class="right-content-heading">
                    <div class="right-content-heading-left">
                        <h3>Latest Robotics Tutorials
                    </div>
                    <div class="right-content-heading-right">
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#" target="_blank"> </a></li>
                                <li><a class="twitter" href="#" target="_blank"></a></li>
                                <li><a class="googleplus" href="#" target="_blank"></a></li>
                                <li><a class="pinterest" href="#" target="_blank"></a></li>
                                <li><a class="dribbble" href="#" target="_blank"></a></li>
                                <li><a class="vimeo" href="#" target="_blank"></a></li>
                            </ul>
                    </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="content-grids">
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum1.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum2.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum3.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="singlepage.html"><img src="images/gridallbum4.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum5.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum6.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum7.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="singlepage.html"><img src="images/gridallbum8.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum9.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum10.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum11.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="singlepage.html"><img src="images/gridallbum1.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="clear"> </div>
                    <!---start-pagenation---->
                    <div class="pagenation">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                    <div class="clear"> </div>
                    <!---End-pagenation---->
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="IoT">
            <div class="right-content">
                <div class="right-content-heading">
                    <div class="right-content-heading-left">
                        <h3>Latest Iot Tutorials
                    </div>
                    <div class="right-content-heading-right">
                        <div class="social-icons">
                            <ul>
                                <li><a class="facebook" href="#" target="_blank"> </a></li>
                                <li><a class="twitter" href="#" target="_blank"></a></li>
                                <li><a class="googleplus" href="#" target="_blank"></a></li>
                                <li><a class="pinterest" href="#" target="_blank"></a></li>
                                <li><a class="dribbble" href="#" target="_blank"></a></li>
                                <li><a class="vimeo" href="#" target="_blank"></a></li>
                            </ul>
                    </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="content-grids">
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum1.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum2.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum3.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="singlepage.html"><img src="images/gridallbum4.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum5.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum6.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum7.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="singlepage.html"><img src="images/gridallbum8.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum9.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum10.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="singlepage.html"><img src="images/gridallbum11.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="singlepage.html"><img src="images/gridallbum1.png" title="allbum-name" /></a>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                        <ul>
                            <li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
                            <li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
                        </ul>
                        <a class="button" href="singlepage.html">Watch now</a>
                    </div>
                    <div class="clear"> </div>
                    <!---start-pagenation---->
                    <div class="pagenation">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                    <div class="clear"> </div>
                    <!---End-pagenation---->
                </div>
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
        <script src="js/index.js"></script>

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