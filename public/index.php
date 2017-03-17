<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

function routing(){
	$url = explode('/', $_SERVER['REQUEST_URI']);
	// var_dump($url);
	// var_dump(count($url));
	$path = array_slice($url, 1, count($url)-2);
	// var_dump($path);
	return $path;
}
$a = routing();
var_dump($a);













// function routing($path){
// 	$first_path_arr = explode('/', $path);
// 	var_dump($first_path_arr);
// 	$xx = array_pop($first_path_arr);
// 	var_dump($xx);	
// }
// routing($_SERVER['REQUEST_URI']);

// $stack = array("orange", "banana", "apple", "raspberry");
// $fruit = array_pop($stack);
// print_r($stack);

// var_dump($_SERVER);
// $path = $_SERVER['REQUEST_URI'];
// var_dump($path);
// $path_arr = explode('/', $path);
// var_dump($path_arr);
	

?>
