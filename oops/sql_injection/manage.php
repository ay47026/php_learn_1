<?php


class db{
	private $db;
	function database()
	{
		$this->db = new mysqli("localhost","root","","oops");
		if(!$this->db->connect_error){
			return $this->db;
		}
	}
}

 class check_user{
 	    private $username;
  		private $password;
  		private $db;
  		private $query;
  		private $response;
  		private $tem_pwd;
  		private $data;
 	function __construct($username,$password){
         $this->username = $username;
         $this->password = $password;
         $this->db = new db();
         $this->db = $this->db->database();
         $this->query = $this->db->prepare("SELECT * FROM user WHERE username =?");
         $this->query->bind_param('s',$username);
         $this->query->execute();
         $this->response = $this->query->get_result();
         if($this->response->num_rows !=0){
           $this->data = $this->response->fetch_assoc();
           $this->tem_pwd = $this->data['password'];
           if($this->tem_pwd == $this->password){
           	echo "success";
           }
           else{  
           	echo "wrong password";
           }
         }
         else{
         	echo "user not found";
         }
  		new db();

 	}
 }

  class main{
  	private $username;
  	private $password; 
  	private $db;

  	function __construct(){
  		$this->db = new db();
  		$this->db = $this->db->database();
  		$this->username = mysqli_real_escape_string($this->db, $_POST['username']);
  		$this->password = mysqli_real_escape_string($this->db, $_POST['password']);
  		new check_user($this->username,$this->password);
  	}
  }
new main();
  ?>