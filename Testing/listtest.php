<!doctype.html>
<html lang="en">
<head>
	<meta char="utf-8">
	<title> List Pull Test </title>
	<link rel="stylesheet" href="base.css">
</head>
<body>
<header>
	<div id = "logo">
	</div>
	<h1> Carlo's Awesome Project </h1>
	<ul id = "nav">
		<li><a href="#"> Link 1 </a></li>
		<li><a href="#"> Link 2 </a></li>
		<li><a href="#"> Link 3 </a></li>
		<li><a href="#"> Link 4 </a></li>
	</ul>
</header>
<main>
<?php

	$file = fopen("testlist.txt", "r");
	
	//$count=0;
	
	while(! feof($file)) {
	
	//$groceryId = $count;
	$line = fgets($file);
	$content = str_replace("\n", "", $line);
	$attribute = preg_split("/,/", $content);
	
	//echo (" ID: ".$groceryId)." - ";
	echo ($attribute[0]."\t"."-"."\t"."Days Remaining: ".$attribute[2]."<br>");
	
	//$count++;
	}
	
	fclose($file);
	
?>
</main>
<footer>
	<p> This is my footer </p>
	<p> copyright &copy; 2017 </p>
</footer>
</body>

</html>