<?php
include_once("Connect.php");

class HomeModel extends Connect{
	public function getNewProducts(){
		$sql="SELECT * FROM products WHERE today=1";
		$this->setQuery($sql);
		return $this->loadAllRows();
		
	}
}
?>