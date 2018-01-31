<?php
include_once("Controller.php");
include_once('model/CategoryModel.php');
class CategoryController extends Controller{
	public function getCategory(){
		$model=new CategoryModel();
		$product=$model->getAllProduct();
		$arrData=['product'=>$product];
		return $this->loadView('category',$arrData);
	}
}

?>