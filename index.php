<html>
<head><title>Chris' Blog</title></head>
<body>

<?php

// Simple array:

$dir   = '/home/ubuntu/web/blog/articles';
$array = scandir($dir);
$count = count($array);

$urlVariables = explode("/",$_SERVER['REQUEST_URI']);



$date = $urlVariables[2];
$article = $urlVariables[3];

// include articles from /articles/
// in format "20120131-article-name.html" for an article dated Jan 31, 2012

if(!empty($article))
	include("articles/" . $date . "-" .$article . ".html");
else
	include("home.html");

for ($i = 2; $i < $count; $i++) {
	$article = substr($array[$i], 9, -5);
	$dateStr = substr($array[$i], 0, 8);
	
	echo "<li>";
	
	$time = strtotime($dateStr);
	echo date("d M, Y", $time);
	//$date = new DateTime($dateStr);
	//$dateFormat = echo date("Y/m/d",$dateStr);
		
	echo "<a href='/blog/$dateStr/$article'> $article</a> <br/>";
	echo "</li>";
}

?>

</body>
</html>
