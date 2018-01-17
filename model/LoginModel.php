<?php
include_once('connect.php');

class LoginModel extends Connect{
	public function Login($username,$password){
		//$con=$this->connect();

		$sql='select * from `users` where username="'.$username.'" and password="'.$password.'" ';
		$this->setQuery($sql);
		return $this->loadAllRows();
		// $result=$con->query($sql);
		// return $user = mysqli_fetch_assoc($result);

	}

	// public function getUsers(){
	// 	//$con=$this->connect();

	// 	$sql='select * from `users` where username="'.$username.'" and password="'.$password.'" ';
	// 	$result=$con->query($sql);
	// 	return $user = mysqli_fetch_assoc($result);
	// }
}

// $c=new LoginModel();
// $name="admin";
// $c->Login($name,$name);
// print_r($c);
?>