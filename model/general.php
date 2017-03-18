<?php

class generalModel {

	public static $once = 0;
	public $mysqli;
	
	function __construct($host_name='', $user='', $pass='', $db=''){
		if (self::$once == 0) {
			$this->mysqli = new mysqli($host_name, $user, $pass, $db);

			if ($this->mysqli->connect_error) {
			    die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
			            . $this->mysqli->connect_error);
			}else{
				self::$once++;
				// var_dump(self::$once);
			}
		}else{
			var_dump('conectione is ok once');
		}
		
		// echo "ok";
	}
}

?>