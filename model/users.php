<?php


/**
* 
*/
class usersModel extends generalModel
{
	
	public function insert_user($username, $pass){
		$res = $this->mysqli->query("SELECT id, username FROM users where username='$username'");
		$res = $res->fetch_array();
		var_dump($res);
		if ($res == null) {
			$reg = $this->mysqli->query("INSERT INTO users (username, pass) VALUES ('$username', '$pass')");
			if ($reg) {
				$req = 'you are regstrate';
			}else{
				$req = false;
			}
			
		}
		else{
			$req = false;
		}
		return $req;
		
	}
	public function control_user($username, $pass){
		$res = $this->mysqli->query("SELECT id, username FROM users where username='$username' AND pass='$pass'");
		$user = $res->fetch_array();
		if ($user != null) {
			$user = $res->fetch_assoc();
		}
		else{
			$user = false ;
		}
		
		return $user;
	}

}


?>