<?php  

$db = new mysqli("localhost","root","","oops");
$username =  mysqli_real_escape_string($db,$_POST['username']);
$password =  mysqli_real_escape_string($db,$_POST['password']);
$query = $db->prepare("SELECT password FROM user  WHERE username=?");
//ss means string ,string 	this is flag integar =i , float = f
$query->bind_param('s',$username);
$query->execute();
$query->store_result();

if($query->num_rows !=0){
	$query->bind_result($pwd_result);
	$query->fetch();
	echo $pwd_result;
}    
else {
	echo " Please not change ";

}


 ?>