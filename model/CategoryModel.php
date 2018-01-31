<?php
include_once("connect.php");

/**
* 
*/
class CategoryModel extends Connect
{
	
	public function getProducts($id){
		$sql = "SELECT * FROM products WHERE id= $id";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	public function getAllProduct(){
		$sql = "SELECT * FROM products";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>