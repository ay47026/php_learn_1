<?php

//json syntex
//string formate
$json = '{
           "name" : "abhi",
            "class" : 10
         }';
        // json_decode return php object of $json object
        $x = json_decode($json);


//print the value of name property is = abhi
        echo  $x->name."<br><br><br>";


//associative array 
        $json_assosiative_array = array("name" => "abhishek","class"=> 10,"roll" => 100 );
          print_r($json_assosiative_array);

         //   **** result **** Array ( [name] => abhishek [class] => 10 [roll] => 100 )


           $length = count($json_assosiative_array);
           $key_name = array_keys($json_assosiative_array);

           foreach ($json_assosiative_array as $key => $value) {
                 echo  "<br><br><br>".$key;
           }
           //for non associative ...
           //   foreach ($variable as $y) {
           //       echo  "<br><br><br>".$key;
           // }
          

          

  ?>