<?php
   include('session.php');

?>

<?php 

    $requ = "SELECT * FROM requests WHERE phone = '$login_phone' AND email ='$login_email'  ";

    $requests = mysql_query($requ);
?>

<?php 
  $comp_type = mysql_query("SELECT DISTINCT comp_type FROM components");
?>
<?php 
      $res = "";
      $kit = "";
    if(isset($_POST['add_to_kit'])){

        $std_fetch = mysql_query("SELECT * FROM users WHERE phone = '$login_phone' AND email ='$login_email' ");

        $std_data = mysql_fetch_array($std_fetch);
        $std_id = $std_data['id'];
        $std_fullname = $std_data['fullname'];
        $std_phone = $std_data['phone'];
        $std_email = $std_data['email'];
        $comp_type = $_POST['comp_type'];
        $comp_name = $_POST['comp_name'];
        $num_comp = $_POST['num_comp'];


        $request = mysql_query("INSERT INTO temp_requests(std_id,fullname,phone,email,comp_type,comp_name,num_comp) VALUES('$std_id','$std_fullname','$std_phone','$std_email','$comp_type','$comp_name','$num_comp') ")or die(mysql_error());


        if($request!=null){


          $message = '<div class="alert alert-dismissible alert-success">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Added to kit.</strong> 
                </div>';

          $res = $message;
          $kit_query = "SELECT * FROM temp_requests WHERE phone = '$login_phone' AND email ='$login_email' ";

         $qu= mysql_query("UPDATE components SET aval_comp=(aval_comp-$_POST[num_comp]) WHERE comp_name ='$comp_name' ");

      $kit = mysql_query($kit_query);

      if($kit===false){
              die(mysql_error()); // TODO: better error handling
      }
        $comp_type = mysql_query("SELECT DISTINCT comp_type FROM components");

        }
    }

?>
<?php 

 if(isset($_POST['request_comp'])){

 	$req_cmp = mysql_query("INSERT INTO requests(std_id,fullname,phone,email,comp_type,comp_name,num_comp)SELECT std_id,fullname,phone,email,comp_type,comp_name,num_comp FROM temp_requests WHERE phone='$login_phone' AND email='$login_email'");

 	if($req_cmp!=null)
 	{
 		$del_temp_req = mysql_query("DELETE FROM temp_requests WHERE phone='$login_phone' AND email='$login_email'");
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
    <script src="../js/jquery-1.12.4.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


  <script>
    $(document).ready(function() {
        $('#comp_type').change(function(){
            var Value = $(this).val();
            if(Value != null){
                jQuery.ajax({     
                    type: 'POST',         
                    url: "comp_name.php?comp_type="+Value,
                    success: function(data){ 
                        $('#comp_name').html(data);
                    }
                });
            }
        })
    })
    
</script>

<script>
    $(document).ready(function() {
        $('#comp_name').change(function(){
            var cname = $(this).val();
            console.log($('#comp_name').val())  //jquery
            if(cname != null){
                jQuery.ajax({     
                    type: 'POST',         
                    url: "aval_comp.php?comp_name="+cname,
                    success: function(data){ 
                        $('#aval_comp').html(data);
                        console.log(data);

                    }
                });
            }
        })
    })
    
</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
  .scrollit {
    overflow:scroll;
    height:300px;
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
                   <li class="page-scroll" style="background-color: #18BC9C ">
                        <a href="components.php">Components</a>
                    </li>
                    <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    <?php echo $row['username']; ?>
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu " style="background-color: #2C3E50">
                          
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

    <section id="search" class="container ">  

      <div class="request_component" style="margin-top: 3%"">
      </div>
          <div class="row">
            <div class="col-md-5"><?php echo $res; ?>
              <form class="form-horizontal" method="post" action="" name="req">
                <fieldset>
                  <legend><h4>Request Components</h4></legend>

                  <div class="form-group">
                    <div class="col-lg-10">
                      <table border="2" align="center" class="table table-bordered table-condensed table-hover table-responsive">
                             <td>Type of the Component:</td>
                              <td>
                                  <select name="comp_type" class="form-control" id="comp_type" required="">
                                      <option disabled selected value>Select Type of component</option>
                                      <?php  If(mysql_num_rows($comp_type)>0)
                                        {
                                           while($row=mysql_fetch_array($comp_type))
                                           {  
                                      ?>
                                      <option value="<?php echo $row['comp_type']; ?>"><?php echo $row['comp_type']; ?></option>
                                      <?php

                                      }
                                      }
                                       ?>
                        
                                  </select>
                                </td>
                            </tr>
                            
                            <tr>
                              <td>Name of the Component:</td>
                              <td><select id="comp_name" name="comp_name" class="form-control" required="">
                                <option disabled selected value>Select Type First</option>

                              </select></td>
                            </tr>
                            
                            <tr>
                                <td>Number of Components</td>
                                <td><span class="btn btn-info" id="aval_comp" name="aval_comp" value="Available">Select Component Name</span></td>
                            </tr>
                         </table><br>
                        <center><input type="submit" class="btn btn-primary" value="Add to kit" name="add_to_kit"></center>
                    </div>
                  </div>
                 </fieldset>
              </form>
            </div>
            
            <div class="col-md-7 ">
              <form class="form-horizontal" method="post" action="" name="req">
                <fieldset>
                  <legend><h4>Kit</h4></legend>

                  <div class="form-group">
                    <div class="col-lg-10">
                      <table border="2" align="center" class="table table-bordered table-condensed table-hover table-responsive">

                        <?php 
                          while($req_kit=mysql_fetch_array($kit)){
                        ?>
                          <tr>
                            <td><?php echo $req_kit['comp_type'] ?></td>
                            <td><?php echo $req_kit['comp_name'] ?></td>
                            <td><?php echo $req_kit['num_comp'] ?></td>

                          </tr>
                         <?php    
                          } 
                        ?>

                         </table><br>
                        <center><input type="submit" class="btn btn-primary" value="Request" name="request_comp"></center>
                    </div>
                  </div>
                 </fieldset>
              </form>
            </div>
          </div>
      </div>
          <div class="container panel panel-primary">
              <legend><h4>Requested Components</h4></legend>
                <form class="form-horizontal" method="" action="" name="req">
       <table class="table table-striped table-hover ">
          <thead>
            <tr class="info">
              <th>Component Type</th>
              <th>Component Name</th>
              <th>Number of Components</th>
              <th>Student Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php 
               while($req=mysql_fetch_array($requests)){
                        ?>  
                          <tr  name="<?php echo $req['id']; ?>" class="active">
                            <td name="comp_type">
                                <?php echo $req['comp_type']; ?>
                                <input type="hidden" name="comp_type" value="<?php echo $req['comp_type']; ?>">
                            </td>
                            
                            <td name="fullname">
                                <?php echo $req['comp_name'] ?>
                                <input type="hidden" name="comp_name" value="<?php echo $req['fullname']; ?>">
                            </td>
                            <td><?php echo $req['num_comp'] ?></td>
                            <td><?php echo $req['fullname'] ?></td>
                            <td>
                                <?php echo $req['phone'] ?>
                                        
                            </td>
                            <td><?php echo $req['email'] ?></td>
                            <td>
                              <?php 
                                
                                if($req['status'] ==='Alloted' ){

                                  echo "<font class='btn btn-success'>Alloted</font>";
                                }
                              
                                elseif ($req['status'] ==='Waiting') {

                                  echo "<font class='btn btn-warning'>Waiting</font>";

                                }
                                elseif ($req['status'] ==='Declined') {

                                  echo "<font class='btn btn-danger'>Declined</font>";

                                }

                              ?>  
                              </td>
                          </tr>
                         <?php    
                          } 
                        ?>
          </tbody>
        </table>
        </form>
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