<?php
require_once('Controller.php');
require_once('../model/LoginModel.php');
require_once('../model/connect.php');

class LoginController extends Controller{
	public function getLogin(){
		$_Username=isset($_POST['username'])?$_POST['username']:'';
		$_Password=isset($_POST['password'])?$_POST['password']:'';

		if($_Password!=''&&$_Username!=''){
			$_LoginModel=new LoginModel();
			$result=$_LoginModel->login($username,$password);
			if($result->num_rows>0){
				echo "123";
				//header('Location: view/trangchu.php');
			}
			else{
				echo "456";
				//header('Location: view/login.php');
			}
			$db->close();
		}
		//return $this->loadView('login');
	}
}

?>