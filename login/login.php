<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<fieldset>
			<legend>Sign up</legend>
<label for="email">email</label><br>
<input type="email" name="email" id="email"><br>
<label for="password">password</label><br>
<input type="password" name="password" id="password"><br>
<button type="submit" name="submit" >sign in</button>

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
           $username=$_POST['email'];
            $password=$_POST['password'];
            $check_user="SELECT username FROM users WHERE username='$username'";
            $response= $db->query($check_user);
            if($response->num_rows==1){
                  $check_pass="SELECT password FROM users WHERE password='$password'";
                   $pwd_response= $db->query($check_pass);
                   if($pwd_response->num_rows==1){
                    header("Location:http//google.com");
                   }else{
                     echo "password not exist";
                   }
            }else{
                 echo "user not exist";
            }

        }else{

        }
    	
}
?>









