<?php
   include('../config.php');

   session_start();
   

   $user_email = $_SESSION['user_email'];
   
   $query = "SELECT username,email,phone FROM ols_users WHERE email = '$user_email' ";

      $stmt = $con->prepare($query);
      $stmt->bindParam(1, $email);
      $stmt->bindParam(2, $password);
      $stmt->execute();
         $num = $stmt->rowCount();
           if($num>0){

               $results_login = $stmt->fetchAll(PDO::FETCH_ASSOC);
               $username = $result["username"];
                header("location : user.php");
           }
           else{
            echo "Your Not registerd Please login to register";
           }

?>