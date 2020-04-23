<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<fieldset>
			<legend>Sign up</legend>
					<label for="fullname">fullname</label><br>
<input type="text" name="fullname" id="fullname"><br>
<label for="email">email</label><br>
<input type="email" name="email" id="email"><br>
<label for="password">password</label><br>
<input type="password" name="password" id="password"><br>
<button type="submit" name="submit" >sign up</button>

		</fieldset>
         

	</form>

</body>
</html>

<?php
  $db=  new mysqli("localhost","root","","app");
    if($db->connect_error){
    	echo "Databbase not connected";
    }
   
    else{
    	 if($_SERVER['REQUEST_METHOD']=="POST"){
    	$fullname=$_POST['fullname'];
    	$email=$_POST['email'];
    	$password=$_POST['password'];
    	$check_user="SELECT username FROM users WHERE username='$email'";
    	  $response=$db->query($check_user);
    	if($response->num_rows == 0){
            $store_user="INSERT INTO users(full_name,username,password)
            VALUES('$fullname','$email','$password')";
            if($db->query($store_user)){
                     echo "sigup success";
            }else{
            	echo "signup failed";
            }
    	}
    	else{
    		echo "user already exist";
    	}
    
    }
}
?>









