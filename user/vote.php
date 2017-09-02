
<?php 
	
	include('../config.php');

	$questions= isset($_POST['questions']) ? $_POST['questions'] : "";

	$questions = $_POST['questions'];
	echo $questions;

	$user_email= isset($_POST['user_email']) ? $_POST['user_email'] : "";
	$act= isset($_POST['act']) ? $_POST['act'] : "";
	$get_vote= isset($_POST['vote']) ? $_POST['vote'] : "";	

	if($get_vote==2){
	$dislike_sql = "SELECT * FROM  ols_votes WHERE user_email= ? AND questions = ? ";

          $di_sq = $con->prepare($dislike_sql);
          $di_sq->execute();

          $dislike_count = $di_sq->rowCount(); 
	}
    elseif($get_vote==1){

    $like_sql = "SELECT * FROM  ols_votes WHERE user_email= ? AND questions = ? ";

          $li_sq = $con->prepare($like_sql);
          $li_sq->execute();
          
          $like_count = $li_sq->rowCount(); 
	}

	if($act == 'like'): //if the user click on "like"
		if(($like_count == 0) && ($dislike_count == 0)){


			$inset_like = "INSERT INTO ols_votes (user_email,questions, vote )VALUES(?, ?, 1)";

			$inset_like = $con->prepare($inset_like);
			$inset_like->execute();

		}
		if($dislike_count == 1){

			$update_like = "UPDATE ols_votes SET vote = 1 WHERE user_email = ? and questions = ? " ;
			$update_like = $con->prepare($update_like);
			$update_like->execute();
		}

	endif;
	if($act == 'dislike'): //if the user click on "like"
		if(($like_count == 0) && ($dislike_count == 0)){
	
			$inset_dislike = "INSERT INTO ols_votes (user_email,questions, vote )VALUES(?, ?, 2)";

			$inset_dislike = $con->prepare($inset_dislike);
			$inset_dislike->execute();
		}
		if($like_count == 1){
			
			$update_dislike = "UPDATE ols_votes SET vote = 2 WHERE user_email = ? and questions = ? " ;
			$update_dislike = $con->prepare($update_dislike);
						$update_dislike->execute();

			
		}

	endif;


?>

