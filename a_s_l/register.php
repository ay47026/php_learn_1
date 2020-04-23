
<?php
  $db=  new mysqli("localhost","root","","app");
    if($db->connect_error){
        echo "Databbase not connected";
    }
   
    else{
         if($_SERVER['REQUEST_METHOD']=="POST"){
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $check_user="SELECT username FROM users WHERE username='$email'";
          $response=$db->query($check_user);
        if($response->num_rows == 0){
            $store_user="INSERT INTO users(full_name,username,password)
            VALUES('$fullname','$email','$password')";
            if($db->query($store_user)){
                     echo "sigup success";
            }else{
                echo "signup failed";
            }
        }
        else{
            echo "user already exist";
        }
    
    }
}
?>









