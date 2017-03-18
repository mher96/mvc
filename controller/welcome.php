<?php




class welcomeController
{
	
	function __construct()
	{
		session_start();
		//var_dump('i am controller');
		// include '../view/indexView.php';
	}

	public function login(){
		if (isset($_POST['login'])) {
			// var_dump($_POST['login']);
			$username = $_POST['username'];
			$pass = $_POST['pass'];
			if (!empty($username) && !empty($pass)) {
				$model = new usersModel('localhost', 'root', 'secret', 'mvc');
				$config = $model->control_user($username, $pass);
				if ($config == false) {
					echo 'login or pas are envalid';
				}
				else{
					
					$_SESSION["online"] = $config['username'];
					header('Location: http://mvc.dev/welcome/loginin/');
				}
			}
			// var_dump($username);
			// var_dump($pass);
		}
		else{
			header('Location: http://mvc.dev/welcome/index/');
		}
	}

	public function reg(){
		if (isset($_POST['reg'])) {
			$username = $_POST['username'];
			$pass = $_POST['pass'];
			$cpass = $_POST['cpass'];
			if (!empty($username) && !empty($pass) && !empty($cpass)){
				if ($pass == $cpass) {
					$model = new usersModel('localhost', 'root', 'secret', 'mvc');
					$config = $model->insert_user($username, $pass);
					if ($config != false) {
						header('Location: http://mvc.dev/welcome/index/');
					}
					else{
						header('Location: http://mvc.dev/welcome/registration/arg/');
					}
				}
				else{
					header('Location: http://mvc.dev/welcome/registration/arg/');
				}
			}
		}
		else{ 
			die('chi kareli');
		 }
	}


	public function index(){
		session_destroy(); 
		$view = new generalView('mher');
		$view->render('login');
		var_dump($_SERVER['DOCUMENT_ROOT']);
		//echo $view->var;
		//$users = new usersModel('localhost', 'root', 'secret', 'mvc');
		//$dump = $users->insert_user('tijko','yy');
		//$dump = $users->control_user('mher','pass');
		//var_dump($dump);
	}
	public function loginin(){
		if (isset($_SESSION["online"])) {
			$view = new generalView($_SESSION["online"]);
			$view->render('loginin');
		}
		else{
			header('Location: http://mvc.dev/');
		}
	}
	public function registration($arg=false){
		if ($arg == false) {
			session_destroy(); 
		$view = new generalView('');
		$view->render('registr');
		}
		else{
			session_destroy(); 
		$view = new generalView('youre username are exsits or conf pass are false');
		$view->render('registr');
		}
		
	}



}



?>