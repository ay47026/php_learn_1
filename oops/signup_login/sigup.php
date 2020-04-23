<?php 
$db =  new mysqli("localhost","root","","oops");
$f = $_POST['fullname'];
$f = trim($f);
$f = htmlspecialchars($f,ENT_QUOTES);
$f = mysqli_real_escape_string($db,$f);

$u = $_POST['username'];
$u = trim($u);
$u = htmlspecialchars($u,ENT_QUOTES);
$u = mysqli_real_escape_string($db,$u);

$p = trim($_POST['password']);
$p = md5($p);
$q = $db->prepare("INSERT INTO user2 (full_name,username,password)
VALUES (?,?,?)");
$q->bind_param('sss',$f,$u,$p);
$q->execute(); 
if($q->affected_rows != 0){
	echo "success";
}else{
	echo "failed";
}
    
 ?>