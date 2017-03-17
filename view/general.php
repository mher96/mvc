<?php
// echo "it iz indexview";

// include '../view/public/header.php';
// include '../view/public/login.php';
// include '../view/public/foother.php';

/**
* 
*/
class generalView{
	
	function __construct($view_name)
	{
		include '../view/public/header.php';
		include '../view/public/'.$view_name.'.php';
		include '../view/public/foother.php';
	}
}



?>