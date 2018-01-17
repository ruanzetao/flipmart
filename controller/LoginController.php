<?php
include('Controller.php');
//include("model/connect.php");
include('model/LoginModel.php');

class LoginController extends Controller{
	public function getLogin(){
		$_Username=isset($_POST['username'])?$_POST['username']:'';
		$_Password=isset($_POST['password'])?$_POST['password']:'';
		echo "01234";
		
		if($_Password!=''&&$_Username!=''){
			$_LoginModel=new LoginModel();
			echo "1";
			$result=$_LoginModel->Login($_Username,$_Password);
			echo "2";
			if($result->num_rows>0){
				echo "123";
				return $this->loadView('trangchu');
			}
			else{
				echo "456";
				return $this->loadView('login');
			}
			//$db->close();
		}
		
	}
}

?>