<?php

$db = new mysqli("localhost","root","","oops");

if(!$db->connect_error)
{
	class create_table
	{
        private $sql;
        private $response;
        function __construct()
        {
        	$this->sql = "CREATE TABLE demo
        	(
        	id INT(11) NOT NULL AUTO_INCREMENT,
        	name VARCHAR(50),
        	PRIMARY KEY(id)
            )";

            $this->response = $GLOBALS['db']->query($this->sql);

            if(!$this->response)
            {
             die("failed"); 
            }
        }  
        function __destruct()
        {
        	header("Location:https://google.com");
        }
	}
	new create_table();

}

  ?>