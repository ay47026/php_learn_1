<?php

// basic oops code

class demo{
	//create properties which is variable in processral php
	public $x = "abishek";

}
//reate object of the class then access the properties of the class
    $object = new demo();
    echo $object->x;




//  additionof 2 pproperties
  class demo2{
  	public $x = 10;
  	public $y = 20;

  }

  $object = new demo2();
  $result = $object->x+$object->y;
  echo "<br>".$result;


//function in a class 

class demo3{
	public $x;
	function demo(){
		// $this is temprary object of class demo3
		$this->x ="success";
	}
}
$object = new demo3();
$object->demo();
echo "<br>".$object->x;


// parameter in a function in the class
 class demo4{
 	public $x;
 	function demo($data){
 		echo "<br>".$this->x = $data;

 	}
 }
 $object = new demo4();
 $object-> demo("lichu"); 








  ?>

 <!-- opps form -->
<body>
	<form method="post" action="index.php">
		<input type="text" name="user">
		<input type="submit" >
	</form>
</body>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
	class text{
		public $data;
		function demo(){
			echo $this->data = $_POST['user'];
		}
	}
	$object  = new text();
	$object->demo();
}



  ?>

<!-- **********************************  CONSTRUCTOR *********************-->

<?php

// constructor meanss class name is same as fuction name
// class wap{
// 	function wap(){
//      echo "<br>hello abhi";
// 	}
// }
//  new wap();

// syntex of constructor
 class wap2{
 	function __construct(){
 		echo "<br>hello";
 	}
 }
new wap2();



 class wap3{
 	function __construct($data){
 		echo "<br>".$data;
 	}
 }
new wap3("abhi");


// destructor _______  alawys execute after the costructor
 class wap4{
 	function __construct($data){
 		echo "<br>".$data;
 	}
 	function __destruct(){
 		echo "<br>testing";
 	}
 }
new wap4("abhi");




  ?>
  <!-- ***constant****** -->

  <?php
 // const = decalare the constant as a property x and which is never change
 class text4
 {
     const x = "constant";
 }

// 'scope resulution operator = :: ' double colan is used for the call a constant in the class
 echo "<br>".text4::x;


  class text5
 {
     public static $x = "public static variable";
 }

// 'scope resulution operator = :: ' double colan is used for the call a constant in the class
 echo "<br>".text5::$x;

 class text6
 {
     public static $x = "wap";
     static function demo(){
     	echo "<br>"."success";
     }
 }

// 'scope resulution operator = :: ' double colan is used for the call a constant in the class
text6::demo();


 class text7
 {
     public static $x = "wap";
     static function demo(){
     	echo "<br>".self::$x;
     }
 }

// 'scope resulution operator = :: ' double colan is used for the call a constant in the class
text7::demo();  




    ?>
    <!-- use comman trait -->

    <?php
   trait comman_code{

   	static function demo(){
   		echo "<br> success";
   	}
   }
class a{
   use comman_code;
}
class b{
   use comman_code;
}
a::demo();
b::demo();


//inheritance

class common_code{
	public $name = "abhishek yadav";
	public $age  ="110";
}

class students extends common_code{

}
class facault extends common_code{
public $sub = "math";
	public $sal  ="11000";
}
$st = new students();
echo "<br>".$st->name;


      ?>



      <!-- encapsulation  

      1. codes in side the building block
      2. all properties are private , access only by the functon in the class  -->
      <?php 

class demo10{
 	private $x;
 	function demo($data){
 		echo "<br>".$this->x = $data;

 	}
 }
 $object = new demo10();
 $object-> demo("lichu10"); 


       ?>


       <!-- **********   Abtraction -->

         <?php 
          abstract class test11{
          	public $x = "lichu";     	
          }
        
        class duplicate extends test11{

        }
        
        $o = new duplicate();
        echo "<br>".$o->x;


// abstract function is make only in side the abstract function and fuction defination do not do ,defination do in duplicte class

        abstract class test12{
          	public $x = "lichu"; 
          	abstract function demo();    	
          }
        
        class duplicate2 extends test12{
          function demo(){
          	echo $this->x = "ravi";  
          }
        }
        
        $o = new duplicate2();
        echo "<br>".$o->x;
         
          ?>

          <!-- polymoorphism

1. properti over loading
2. function over loading
3. custructor over loading (php does not suppported)
           -->


           <!-- data hideing

           all properties and method are private   -->


           <!-- arrray  -->
           <?php  
        class main3{
        	private $all_data = [];
        	function demo($x,$y,$z){
        		$this-> all_data[0] = $x;
        		$this-> all_data[1] = $y;
        		$this-> all_data[2] = $z;
        		return $this->all_data;

        	}
        }

        $o = new main3();
        $result = $o->demo("abhi","20","21");
        print_r($result);

           ?>