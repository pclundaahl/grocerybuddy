<?php
// Array with groceries

$file = fopen("groceries.txt", "r");

while(! feof($file)) {
	$line = fgets($file);
	$content = str_replace("\n", "", $line);
	$grocery = preg_split("/,/", $content);
	
	$a[] = $grocery[0];	
}

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br>".$name;
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>