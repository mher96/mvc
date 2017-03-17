<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

function ref_url(){
	$url = explode('/', $_SERVER['REQUEST_URI']);
	// var_dump($url);
	// var_dump(count($url));
	$path = array_slice($url, 1, count($url)-2);
	var_dump($path);
	return $path;
}
function loader_conte($name){
	$name = preg_split('/(?=[A-Z])/',$name);
	var_dump($name);
	if (empty($name[1])) {
		echo '<h4><spna style="color:red;">your class name dont have a spec name</span></h4>';
	}
	elseif ($name[1] == 'Controller') {
		echo "else if cont</br>";
		echo '../controller/'.$name[0].'.php';
		include '../controller/'.$name[0].'.php';
	}
	elseif ($name[1] == 'Model') {
		include '../model/'.$name[0].'.php';
	}
	elseif ($name[1] == 'View') {
		include '../view/'.$name[0].'.php';
	}
	
	else{
		echo '<h4><spna style="color:red;">fdgdfyour class name dont have a spec name</span></h4>';
	}
}
spl_autoload_register('loader_conte');
function routing($path){
	if (isset($path[2])) {
		$args = array_slice($path, 2);
		var_dump($args);
		// echo $path[0].'Controller';
		$controller_name = $path[0].'Controller';
		$controller_obj = new $controller_name;
		$controller_obj->$path[1]($args);
	}
	elseif (isset($path[1])) {
		$controller_name = $path[0].'Controller';
		$controller_obj = new $controller_name;
		$controller_obj->$path[1]();
	}
	elseif (isset($path[0])) {
		$controller_name = $path[0].'Controller';
		$controller_obj = new $controller_name;
		$controller_obj->index();
	}
	else{
		$controller_obj = new welcomeController;
		$controller_obj->index();
	}
}
$path = ref_url();
routing($path);



// $path = routing(); 
// if (empty($path)) {
// 	echo "empry";
// 	$run = ['welcomeController','index'];
// }
// else{
// 	$run = routing();
// }
// $k = new $run[0];
// loader_conte('mherCont');











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
