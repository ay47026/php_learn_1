<!DOCTYPE html>
<html>
<head>
	<title>scandir</title>
</head>
<body>
<h1>folder's name of given path</h1>
</body>
</html>
<?php
$array = scandir("c:/");
$length = sizeof($array);
$i;
for($i=0;$i<$length;$i++){
	echo $array[$i]."<br>";
}
?>