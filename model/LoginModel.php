<?php
include_once('connect.php');

class LoginModel{
	public function Login($username,$password){
		$con=$this->connect();

		$sql='select * from `users` where username="'.$username.'" and password="'.$password.'" ';
		$result=$con->query($sql);
		return $user = mysqli_fetch_assoc($result);

	}

	public function getUsers(){
		$con=$this->connect();

		$sql='select * from `users` where username="'.$username.'" and password="'.$password.'" ';
		$result=$con->query($sql);
		return $user = mysqli_fetch_assoc($result);
	}
}
?>