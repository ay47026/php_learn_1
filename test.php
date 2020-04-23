<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type="email" name="email">
		<input type="submit" name="submit">

	</form>

</body>
</html>
<?php  
//post or get me name attribut ka value pass karte h
if($_SERVER['REQUEST_METHOD']=="POST"){
	$email=$_POST["email"];
    if(empty($email)){
    	header('Location:https://google.com');
    }

}


?>