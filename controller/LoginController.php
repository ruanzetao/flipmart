<?php
require_once('controller/Controller.php');
require_once('model/LoginModel.php');
require_once('model/connect.php');
require_once('view/login.php');
require_once('view/layoutchuacat.php');

class LoginController extends Controller{
	public function getLogin(){
		$_Username=isset($_POST['username'])?$_POST['username']:'';
		$_Password=isset($_POST['password'])?$_POST['password']:'';

		if($_Password!=''&&$_Username!=''){
			$_LoginModel=new LoginModel();
			$result=$_LoginModel->login($username,$password);
			if($result->num_rows>0){
				header('Location: trangchu.php');
			}
			else{
				header('Location: login.php');
			}
			$db->close();
		}
		return $this->loadView('login');
	}
}

?>