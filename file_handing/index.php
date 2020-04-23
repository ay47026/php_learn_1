<?php 

echo "total size = " .round(disk_total_space("c:")/1024/1024/1024,2);
echo "<br>";
echo "free size = ".round(disk_free_space("c:")/1024/1024/1024,2); 
echo "<br>";
echo "Used memory = ".round(disk_total_space("c:")/1024/1024/1024-disk_free_space("c:")/1024/1024/1024,2); 

 ?>
 <!-- copy file -->
 <?php


echo "<h4> copy file </h4>";
if(copy("test.mp4","E:/demo.mp4")){
	echo "success";
}


echo "<h4> file size</h4>";

echo round(filesize("test.mp4")/1024/1024,2);

echo "<h4> file type</h4>";

echo filetype("test.mp4");



echo "<h4> path</h4>";
 echo getcwd();

print_r(scandir(getcwd()));
echo "<h4> directory</h4>";

foreach (scandir(getcwd()) as $data ) {
	echo $data."<br>";
}


   ?>
   <!-- count file folder -->
   <?php

$file = 0;
$folder = 0;
foreach (scandir(getcwd()) as$data) {
	if(filetype($data) == "file"){
		$file = $file+1;
	}
	else if(filetype($data)== "dir"){
     $folder = $folder+1;
	}
}

echo $file."files <br>";
echo $file."folder<br>";

     ?>
<?php 

print_r(file("file.txt"));

$binary = file_get_contents("test.mp4");
file_put_contents("sample.mp3", $binary);

// header("Content-Type:application/pdf");
// readfile("test.pdf");


 ?>
