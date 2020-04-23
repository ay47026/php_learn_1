<?php  

$db = new mysqli("localhost","root","","oops");
$username =  mysqli_real_escape_string($db,$_POST['username']);
$password =  mysqli_real_escape_string($db,$_POST['password']);
$query = $db->prepare("UPDATE user SET password=? WHERE username=?");
//ss means string ,string 	this is flag integar =i , float = f
$query->bind_param('ss',$password,$username);
$query->execute();

if($query->affected_rows != 0){
	echo "success";
}
else {
	echo "Please not change";

}


 ?>