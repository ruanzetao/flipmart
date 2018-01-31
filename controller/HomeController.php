<?php
include_once("Controller.php");
include_once('model/HomeModel.php');
class HomeController extends Controller{
	public function getIndex(){
		$model=new HomeModel();
		$today=$model->getNewProducts();
		//print_r($today);

		$arrData=['today'=>$today];
		return $this->loadView('home',$arrData);
	}
}
?>