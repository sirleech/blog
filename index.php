<?php

// Simple array:

$dir   = '/home/ubuntu/web/blog';
$array = scandir($dir);
$count = count($array);


$article = $_GET["article"];
if(!empty($article))
	include($article . ".html");

for ($i = 2; $i < $count; $i++) {
	if ($array[$i] != 'index.php' && $array[$i] != 'robots.txt')
		echo "<li><a href='https://ausbots.com.au/blog/$array[$i]'> {$array[$i]}</a> <br/>";
}

?>
