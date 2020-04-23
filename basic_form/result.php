<?php  
//post or get me name attribut ka value pass karte h
if($_SERVER['REQUEST_METHOD']=="POST"){
	$email=$_POST["email"];
    echo $email;

}


?>