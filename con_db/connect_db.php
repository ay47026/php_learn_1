<?php
$db = new mysqli("localhost","root","","demo");

$massage="";
if($db->connect_error){
	echo "error";
	
}
else{

	    if($_SERVER['REQUEST_METHOD']=="POST"){
               
	$full_name=$_POST['fullname'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
		$sql_code = "INSERT INTO users(full_name,email,password)
                    VALUES('$full_name','$email','$password')";
		$check = $db->query($sql_code);
		if($check){
			$massage=  "SIGN UP SUCCESS";
		       }
		 else{
			$massage= "sign up failed";
		     }
	    }


	    else{
			echo "sign up failed";
		 }

		}

?>
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
<?php echo $massage;?>
		</fieldset>
         

	</form>


</body>
</html>