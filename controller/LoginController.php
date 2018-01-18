<?php
include('Controller.php');
//include("model/connect.php");
include('model/LoginModel.php');
include('view/layout.php');
include('view/sign-in.php');


class LoginController extends Controller{
	public function getLogin(){
		$_Username=isset($_POST['username'])?$_POST['username']:'';
		$_Password=isset($_POST['password'])?$_POST['password']:'';

		echo $_Username;
		echo "<br>";
		echo $_Password;

		//Bi loi cho nay
			$_LoginModel=new LoginModel();
			$result=$_LoginModel->Login($_Username,$_Password);
			//echo "8910";
			if(count($result)>0){
				return $this->loadView('home');
			}
			
				return $this->loadView('sign-in');
			
		

		//return $this->loadView('login');
		
	}
}

?>