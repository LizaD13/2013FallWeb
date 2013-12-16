<?php

/**
 * 
 */
class Products {
	
	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Products');
		
		while ($rs = $result->fetch_assoc()) {
			$ret[] = $rs;
		}
		
		$conn->close();
		return $ret;
	}
	
	static public function GetItemsInCategory($id=null)
	{
		$sql = "SELECT * FROM Products
				WHERE product_categories_id = $id";
				
				return fetch_all($sql);
		
	}
	
}