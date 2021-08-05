<?php
$url = $_GET['u'];
$parts = parse_url($url);
parse_str($parts['query'], $query);
$key = $query['key'];
if($key == "=AIzaSyDySWgifr2yJ-0G8tFuZ9KfSfIkGlG1S_o")
{
	echo file_get_contents("$url");
}
?>
