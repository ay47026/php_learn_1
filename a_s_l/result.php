<?php

         $email=$_POST['email'];
      
          $db = new mysqli("localhost","root","","app");



         if($db->connect_error){
         	echo "database not connected";
         }else{
         	$check_user = "SELECT username FROM users WHERE username ='$email'";
         	 $response = $db->query($check_user);
         	If($response->num_rows != 0)
         	{
         		echo "user already exist";
         	}else{
         		echo "user not  exist";
         	}
         }

?>