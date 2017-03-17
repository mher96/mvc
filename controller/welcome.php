<?php




class welcomeController
{
	
	function __construct()
	{
		var_dump('i am controller');
		// include '../view/indexView.php';
	}

	public function method(){
		var_dump('ok');
	}


	public function index(){
		$view = new generalView('login');
		$view->x = '15';
	}



}



?>