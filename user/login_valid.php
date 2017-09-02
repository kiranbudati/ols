<?php

session_start();

include('../config.php');
if (isset($_POST['login'])) 
	{
		// Define $username and $password

	
		$email= isset($_POST['email']) ? $_POST['email'] : "";
		$password= isset($_POST['password']) ? $_POST['password'] : "";


		
		$query = "SELECT * FROM ols_users WHERE email = ? AND password = ?";
		        
		        $stmt = $con->prepare( $query );
		        $stmt->bindParam(1, $email);
		        $stmt->bindParam(2, $password);
		        $stmt->execute();
		        $num = $stmt->rowCount();
 




	        if($num>0){
				
				
				 $_SESSION['user_email'] = $email;

				 while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $_SESSION['user_name'] = $row['username'];                    
                    }

				 header("location : user.php");
	        }
	        else{
	        	echo "Your Not registerd Please login to register";
	        }

}
?>