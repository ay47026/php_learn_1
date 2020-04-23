<?php 

// for vedio
header("Content-Type:vedio/mp4");
readfile("demo.mp4");

//for audio
header("Content-Type:audio/mpeg");
readfile("demo.mp3");

//pdf
header("Content-Type:application/pdf");
readfile("demo.pdf");


//image
header("Content-Type:image/jpeg");
readfile("demo.jpg");
 ?>
