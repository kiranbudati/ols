<?php
    session_start();
    include('../config.php');

    if( !isset($_SESSION['user_email']) ){
    header("location:index.php");
    exit();
}
?>

<?php 
  
    $result = "";
     $user_email = $_SESSION['user_email']; 
     $user_name = $_SESSION['user_name'];
      
      if(isset($_POST['submit'])){

        $question= isset($_POST['question']) ? $_POST['question'] : "";
        $description= isset($_POST['description']) ? $_POST['description'] : "";
        
        $query = "INSERT INTO ols_questions(user_email,question,description) VALUES (?,?,?)";

          $stmt = $con->prepare($query);
          $stmt->bindParam(1,$user_email);
          $stmt->bindParam(2,$question);
          $stmt->bindParam(3,$description);
          
          if($stmt->execute()){
    
              $message = '<div class="alert alert-dismissible alert-success">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Question Posted Successfully</strong> 
                </div>';

            $result = $message;
          }
          else{
  
              $message = '<div class="alert alert-dismissible alert-danger">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>OOPS! Something went wrong...</strong> 
                </div>';

            $result = $message;
          }
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
    *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

#page-wrapper {
  width: 100%;
  background: #FFF;
  padding: 1.25rem;
  margin: 1rem auto;
  min-height: 300px;
  border-top: 5px solid #69c773;
  box-shadow: 0 2px 10px rgba(0,0,0,0.8);
}

a,
a:visited {
  color: #08C;
  text-decoration: none;
}

a:hover,
a:focus {
  color: #69c773;
  cursor: pointer;
}

a.delete-file,
a.delete-file:visited {
  color: #CC0000;
  margin-left: 0.5rem;
}


.field {
  margin-bottom: 1rem;
}


#messages {
  display: inline-block;
  font-weight: bold;
  color: #69c773;
  margin-left: 1rem;
}

/* Clearfix Utils */

.clearfix {
  *zoom: 1;
}

.clearfix:before,
.clearfix:after {
  display: table;
  line-height: 0;
  content: "";
}

.clearfix:after {
  clear: both;
}



        a{

            color: blue;
            font-style: 
        }
         .post{
               -moz-box-shadow: 10px 10px 5px #888;
               -webkit-box-shadow: 10px 10px 5px #888;
                border-width: 1px;
                background-color: #fcfcfc;
               box-shadow: 3px 3px 1px #888;
              }
        }
    hr{   
      background-color: black;
    }
.left-div
{
  display: inline-block;
  max-width: 75%;
  text-align: left;
  padding: 30px;
  background-color: #ddd;
  border-radius: 3px;
  margin: 15px;
  vertical-align: top;
}
.right-div
{
  display: inline-block;
  max-width: 18%;
  text-align: left;
  border-radius: 3px;
  margin: 15px;
}
.left-text, .right-text
{
  font: 300 16px/1.6 'Helvetica Neue' sans-serif;
  color: #333;
}
@media screen and (max-width: 600px) 
{
  .left-div 
    {
       max-width: 75%;
    }
    .right-div
    {
      max-width: 18%;
    }
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
                        <a href="user.php">Home</a>
                    </li>

                    <li class="page-scroll" >
                        <a href="tutorials.php">Tutorials</a>
                    </li>
                    <li class="page-scroll" style="background-color: #18BC9C ">
                        <a href="blog.php">Blog</a>
                    </li>
                   <li class="page-scroll">
                        <a href="components.php">Components</a>
                    </li>
                    <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    <?php echo $_SESSION['user_name']; ?>
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
  <section id="search" style="margin: 25px">
    <!--page left start-->
    <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li class="active">Post Question</li>
    </ul>
      <div class="blog-header">

      <!-- message  -->
        <?php echo $result; ?>
      </div>
      <hr>
      <div class="row">

        <div class="col-sm-8 blog-main">
          <div class="blog-post"> 
            <div id="page-wrapper" class="clearfix">            
              <form class="form-horizontal" name="write_quetion" method="post" action="">
              <fieldset>
                <legend>Write your question</legend>
                <div class="form-group">
                  <label for="question" class="col-lg-2 control-label" >Question</label>
                  <div class="col-lg-10">
                    <input type="text" name="question" class="form-control" id="question" placeholder="Question ?" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="textArea" class="col-lg-2 control-label">Descripton</label>
                  <div class="col-lg-10">
                    <textarea class="form-control" 
                   name = "description" rows="6" id="description" placeholder="Write question content here...." required></textarea>
                    <span class="help-block"> Please be specif </span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </fieldset>
            </form>
            </div>
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            
          </div>
          <div class="sidebar-module">
            <h4><?php echo $user_name; ?></h4>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
   
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