<?php
class Products {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT U.*, K.Name as UserType_Name
						FROM Users U
							Join Keywords K ON U.`keywords_id`=K.id
						WHERE U.id=$id
					";
			return fetch_one($sql);			
		}else{
			$sql = "	SELECT U.*, K.Name as UserType_Name
						FROM Users U
							Join Keywords K ON U.`keywords_id`=K.id
					";
			return fetch_all($sql);			
		}
	}
	
	static public function GetCategories($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT *
						FROM product_categories_id
					";
			
			return fetch_all($sql);			
		}
	}
	
static public function GetByCategories($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT *
						FROM Products
					";
			
			return fetch_all($sql);			
		}
	}
}