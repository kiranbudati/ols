<?php
    session_start();
    if( !isset($_SESSION['user_email']) ){
    header("location:index.php");
    exit();
}
?>

<?php 
  
  function getQuestions(){
         include('../config.php');

    $query = "SELECT * FROM ols_questions ORDER BY date desc";

    $stmt = $con->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
 
  }
/*
  function getVotes(){

    include('../config.php');

    $fetch_vote = "SELECT * FROM ols_votes where user_email='".$_SESSION['user_email']."'";
    $fetv = $con->prepare($fetch_vote);
    $fetv->execute();
    return $fetv->fetchAll();
  }
*/
  function percent($num_amount, $num_total) {
      if($num_amount!=null||$num_total!=null){
        $count1 = $num_amount / $num_total;
        $count2 = $count1 * 100;
        $count = number_format($count2, 0);
        return $count;
      }
    }

    include '../config.php';
    // check if the user has already clicked on the unlike (vote = 2) or the like (vote = 1)
/*
        $vts = getVotes();
        foreach ($vts as $votes_ft) {
            
            $questions = $votes_ft['question'];
        }
*/
        $dislike_sql = "SELECT * FROM  ols_votes WHERE user_email='".$_SESSION['user_email']."' AND questions = '".$det['question']."' AND vote = 2 ";

          $di_sq = $con->prepare($dislike_sql);
          $di_sq->execute();
          
          $dislike_count = $di_sq->rowCount(); 

          
          $like_sql = "SELECT * FROM  ols_votes WHERE user_email='".$_SESSION['user_email']."' AND questions = '".$det['question']."' AND vote = 1 ";

          $li_sq = $con->prepare($like_sql);
          $li_sq->execute();
          
          $like_count = $li_sq->rowCount(); 


        // count all the vote 

        // count likes



        //count dis likes


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

        <!-- jQuery -->
            <script src="../js/jquery-1.12.4.js"></script>
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

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link rel="stylesheet" type="text/css" href="css/votes.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>

    $(function(){  

        
        $('.like-btn').click(function(){
          

          var user_email = $("#user_email").val();
          var questions = $("#questions").val();
          var auth_email = $("#auth_email").val();
          console.log(auth_email);
          console.log(user_email);
          console.log(questions);
            $('.dislike-btn').removeClass('dislike-h');    
            $(this).addClass('like-h');
            $.ajax({
                type:"POST",
                url:"vote.php",
                data:'act=like&vote=1&user_email='+user_email+'&questions='+questions,
                success: function(){

                }
            });
        });
        $('.dislike-btn').click(function(){
                    var user_email = $("#user_email").val();
          var questions = $("#questions").val();
          var auth_email = $("#auth_email").val();
          console.log(auth_email);
          console.log(user_email);
          console.log(questions);
  
            $('.like-btn').removeClass('like-h');
            $(this).addClass('dislike-h');
            $.ajax({
                type:"POST",
                url:"vote.php",
                data:'act=dislike&vote=2&user_email='+user_email+'&questions='+questions,
                success: function(){
                }
            });
        });
        $('.share-btn').click(function(){
            $('.share-cnt').toggle();
        });
    });
</script>
      <style type="text/css">
        
        .questions{
          font-size: 14px;
          font-weight: 400;
        }


        .questions a{
          color: #07C;
          text-decoration: none;
          cursor: pointer;
        }
        .questions a:visited{
              color: #005999;
        }
        .questions a:hover, a:active {
            color: #3af;
            text-decoration: none;
        }
        .votes{
          padding: 3px 0;
          white-space: nowrap;
          width: 30px;
          text-align: center;
          box-sizing: border-box;
          height: auto;
          float: none;
          border-radius: 2px;
          font-size: 90%;
          background-color: #eff0f1;
          color: #3b4045;
          transform: translateY(-1px);
          color: white;
          background-color: #5fba7d;
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
<section id="search "><br>
    <!--page left start-->
    <div class="container" >
      
      <div class="row" >
          <a href="write_question.php" class="btn btn-info">Post Question</a>
      </div>
      <hr>
      <h6><a href="#">Latest</a></h6>
      
      <div class="row">
              
        <div class="col-md-8">       
      <?php  
         $ques = getQuestions();
          foreach($ques as $det) {
                {
                  $id=$det['id'];
                  $auth_email = $det['user_email'];
                  $questions = $det['question'];
                  $description = $det['description'];
                  $likes = $det['likes'];
                  $dislikes = $det['dislikes'];
                  $post_date = $det['date'];
          ?>
          <div class="blog-post well">
          <div>

           <span class="blog-post-title" ><?php echo $questions ?></span> 
           </div>
            <input type="hidden" name="user_email" id="user_email" value="<?php echo $_SESSION['user_email'] ?>">
            <input type="hidden" name="auth_email" id="auth_email" value="<?php echo $auth_email ?>">
            <input type="hidden" name="questions" id="questions" value="<?php echo $questions ?>">
            <font class="blog-post-meta"><?php echo $post_date ?> by <a href="#"><?php echo $auth_email;  ?></a></font>
            <hr>
              <div class="description ">
                 <div class="comments"> 
                    <?php echo $description; ?>
                      <div class="tab-tr" id="t1" style="margin: 10px">
                      <div class="like-btn <?php if($like_count == 1){ echo 'like-h';} ?>">Like</div>
                      <div class="dislike-btn <?php if($dislike_count == 1){ echo 'dislike-h';} ?>"></div>

                      <div class="share-btn">Share</div>

                      <div class="stat-cnt">
                          <div class="rate-count"><?php 
                            
                                    $vote_all_count = "SELECT * FROM  ols_votes WHERE questions = '".$det['question']."'";

                                        $vo_al_co = $con->prepare($vote_all_count);
                                        $vo_al_co->execute();

                                        $vote_all_count = $vo_al_co->rowCount();

                              echo $vote_all_count; 

                            ?></div>
                          
                          <div class="dislike-count"><?php 
                                  $vote_dislike_count = "SELECT * FROM  ols_votes WHERE questions = '".$det['question']."' AND vote = 2";

                                  $vo_di_co = $con->prepare($vote_dislike_count);
                                  $vo_di_co->execute();
                                  $vote_dislike_count = $vo_di_co->rowCount();

                                  $vote_dislike_percent = percent($vote_dislike_count, $vote_all_count);
                                echo $vote_dislike_count; 
                            ?></div>
                          <div class="like-count">

                          <?php 
                                        $vote_like_count = "SELECT * FROM  ols_votes WHERE questions = '".$det['question']."' AND vote = 1";

                                        $vo_li_co = $con->prepare($vote_like_count);
                                        $vo_li_co->execute();
                                        $vote_like_count = $vo_li_co->rowCount();

                                        $vote_like_percent = percent($vote_like_count, $vote_all_count);

                              echo $vote_like_count; 
                          
                          ?></div>
                          <div class="stat-bar">
                              <div class="bg-green" style="width:<?php echo $vote_like_percent; ?>%;"></div>
                              <div class="bg-red" style="width:<?php echo $vote_dislike_percent; ?>%"></div>
                          </div><!-- stat-bar -->
                      </div><!-- /stat-cnt -->
                  </div><!-- /tab-tr -->
                  <div class="share-cnt">

                      <!-- AddThis Button BEGIN -->
                      <div class="addthis_toolbox addthis_default_style ">
                      <a class="addthis_button_linkedin_counter"></a>
                      <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                      <a class="addthis_button_tweet"></a>
                      <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> 
                      <a class="addthis_button_pinterest_pinit"></a>
                      <a class="addthis_counter addthis_pill_style"></a>
                      </div>
                      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5174d2b853d85895"></script>
                      <!-- AddThis Button END -->

                  </div><!-- /share-cnt -->
                 </div>
                <hr>
                <div class="blog-post "> 
                  <div id="page-wrapper" class="clearfix">            
                    <form class="form-horizontal" name="write_quetion" method="post" action="">
                    <fieldset class="comments">
                      <h6>Comments :</h6  >
                      <?php  

                          $fetch_comments = mysql_query("SELECT * FROM comments WHERE ques_title = '$qun' ");

                        If(mysql_num_rows($fetch_comments)>0)
                          {
                              while($com=mysql_fetch_array($fetch_comments))
                                {  
                          ?>

                            <div class=""> 
                                <div class="user_name">
                                  <a href="#"><?php echo $com['user_name'] ?></a>
                                </div>

                                <div class="posted_date">
                                  <?php echo $com['date']; ?>
                                </div>
                                <br>
                                <div class="comm">
                                  <?php echo $com['comment'] ?>
                                </div>
                                <hr>
                            </div>
                          <?php
                              }
                            }
                          ?>

                      <hr>
                      <div class="form-group">
                      <input type="hidden" name="ques_title" value="<?php echo $row['ques_title'] ?>">
                        <div class="col-lg-10">
                          <textarea class="form-control" 
                         name = "comment" rows="3" id="comment" placeholder="Write your response here...." required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-8">
                          <button type="submit" name="submit" class="btn btn-primary">Comment</button>

                        </div>
                      </div>
                    </fieldset>
                  </form>
                  </div>
                </div>
              </div>
          </div>
          <?php
            }
          }
        ?>
        </div>
        
        <div class="col-md-4">
          <form class="form-horizontal" action="" method="POST" name="search_form">
               <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" name="search" type="text" required="">
                      <span class="input-group-btn">
                        <input type="submit" name="submit" class="btn btn-primary" value="Search">
                      </span>
                  </div>
                </div>
              </form>
              <hr>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <hr>
            <?php
            $data = getQuestions();
          foreach($data as $row) {
                {
                  $question = $row['question'];
                  $all_likes = $row['likes'];
          ?>
            <ol class="list-unstyled">
              <li>
                <div class="row">
                  <div class="col-md-1">
                      <span class="votes"><?php echo $all_likes ?></span>
                  </div>
                  <div class="col-md-10 questions">
                        <a href="#"><?php echo $question; ?></a>                    
                  </div>
                </div>
              </li>
            </ol>

            <?php
          }
          }
        ?>
          </div>
        </div>  
      </div>
      
    </div>  
  </section>
    

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