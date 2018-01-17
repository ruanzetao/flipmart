<?php
include('Controller.php');
//include("model/connect.php");
include('model/LoginModel.php');

class LoginController extends Controller{
	public function getLogin(){
		$_Username=isset($_POST['username'])?$_POST['username']:'';
		$_Password=isset($_POST['password'])?$_POST['password']:'';

		//Bi loi cho nay
		if(($_Password!='')&&($_Username!='')){
			echo "789";
			$_LoginModel=new LoginModel();
			$result=$_LoginModel->Login($_Username,$_Password);
			echo "8910";
			if($result->num_rows>0){
				echo "123";
				return $this->loadView('home');
			}
			else{
				echo "456";
				return $this->loadView('login');
			}
			//$db->close();
		}

		//return $this->loadView('login');
		
	}
}

?>