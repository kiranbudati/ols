<?php

include('../config.php');


if (isset($_POST['submit'])) 
	{
		// Define $username and $password

		$fullname= isset($_POST['fullname']) ? $_POST['fullname'] : "";
		$username= isset($_POST['username']) ? $_POST['username'] : "";
		$dob = isset($_POST['dob']) ? $_POST['dob'] : "";
		$phone= isset($_POST['phone']) ? $_POST['phone'] : "";
		$email= isset($_POST['email']) ? $_POST['email'] : "";
		$password= isset($_POST['password']) ? $_POST['password'] : "";

		$query = "SELECT id FROM ols_users WHERE email = ? ";
		        
		        $stmt = $con->prepare( $query );
		        $stmt->bindParam(1, $email);
		        $stmt->execute();
		        $num = $stmt->rowCount();
 
	        if($num>0){
	            
	            $email_exists = "Your email is already reigsterd. Plese <a href='index.php'><b style='color:blue'>Login</b></a> to Continue";
	        }

	        else
	        {
	 
	                // now, compose the content of the verification email, it will be sent to the email provided during sign up
	                // generate verification code, acts as the "key"
	                $verificationCode = md5(uniqid("yourrandomstringyouwanttoaddhere", true));
	 
	                // send the email verification
	                $verificationLink = "http://orangeresearchlabs.com/ols/user/activate.php?code=" . $verificationCode;
	 
	                $htmlStr = "";
	                $htmlStr .= "Hi " . $email . ",<br /><br />";
	 
	                $htmlStr .= "Please click the button below to verify your subscription and have access to the download center.<br /><br /><br />";
	                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
	 
	                $htmlStr .= "Kind regards,<br />";
	                $htmlStr .= "<a href='https://orangeresearchlabs.com/' target='_blank'>Learn Space</a><br />";
	 
	 
	                $name = "Learn Space";
	                $email_sender = "no-reply@orangeresearchlabs.com";
	                $subject = "Verification Link | Learn Space | Subscription";
	                $recipient_email = $email;
	 
	                $headers  = "MIME-Version: 1.0\r\n";
	                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	                $headers .= "From: {$name} <{$email_sender}> \n";
	 
	                $body = $htmlStr;
	 
	                // send email using the mail function, you can also use php mailer library if you want
	                if( mail($recipient_email, $subject, $body, $headers) ){
	 
	                    // tell the user a verification email were sent
	                    $email_sent = "<div id='successMessage'>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link so you can login.</div>";
	 
	 
	                    // save the email in the database
	                    $created = date('Y-m-d H:i:s');
	 
	                    //write query
	                    $query = "INSERT INTO
	                                ols_users
	                            SET
	                            	fullname = ?,
	                            	username = ?,
	                            	dob = ?,
	                            	phone = ?,
	                                email = ?,
	                                password = ?,
	                                verified = '0',
	                                verification_code = ?,
	                                created = ?
	                                ";
	 
	                    $stmt = $con->prepare($query);
	 
					 	$stmt->bindParam(1, $fullname);
	                    $stmt->bindParam(2, $username);
	                    $stmt->bindParam(3, $dob);
	                    $stmt->bindParam(4, $phone);
	                   	$stmt->bindParam(5, $email);
	                   	$stmt->bindParam(6, $password);
	                    $stmt->bindParam(7, $verificationCode);
	                    $stmt->bindParam(8, $created);
	 
	                    // Execute the query
	                    if($stmt->execute()){
	                        // echo "<div>Unverified email was saved to the database.</div>";
	                    }else{
	                        echo "<div>Unable to save your email to the database.";
	                        
	                        print_r($stmt->errorInfo());
	                    }
	 
	                }else{
	                    die("Sending failed.");
	                }
	        }

	}


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
      <style type="text/css">
      	body {
			  background-color: #eff0f3;
		}
      </style>
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
                <a class="navbar-brand" href="#page-top">Learn Space</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.php#page-top"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section>
    	
    	<?php 
    		if($num>0){
    			?>	
		    	<div class="alert alert-dismissible alert-danger">
				  <strong><?php echo $email_exists; ?></strong> 
				</div>
		<?php 
		}
		?>
		<div class="alert alert-dismissible alert-info">
			  <strong><?php echo $email_sent; ?></strong>
			</div>
    </section>
</body>

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


</html>
