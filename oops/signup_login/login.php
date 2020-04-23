<?php 
$u = $_POST['username'];
$p = $_POST['password'];
$db =  new mysqli("localhost","root","","oops");
$q = "SELECT * FROM user2 WHERE username = '$u' AND password= '$p'";
$response = $db->query($q);
if($response->num_rows != 0){
$data = $response->fetch_assoc();
echo $data['full_name'];
}else{
	echo "failed";
}

 ?>