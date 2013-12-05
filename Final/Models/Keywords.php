<?php

/**
 * 
 */
class Keywords {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT *
						FROM Keywords K
						WHERE id=$id
					";
			return fetch_one($sql);			
		}else{
			$sql = "	SELECT *
						FROM Keywords K
							
					";
			return fetch_all($sql);			
		}
	}
	
	static public function Blank()
	{
		return array( 'parent_id'=>null, 'Name'=> null );
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Keywords::Encode($row, $conn);
		if($row['id']){
			$sql =	" UPDATE Keywords "
				.	" Set parent_id='$row2[parent_id]', Name='$row2[Name]' "
				.	" WHERE id=$row2[id] ";
		}else{
			$sql = 	" Insert Into Keywords (parent_id, Name, ) "
				.	" Values ('$row2[parent_id]', '$row2[Name]') ";			
		}
		
		$conn->query($sql);
		//echo $sql; 
		$error = $conn->error;		
		$conn->close();
		//$error = "dd";
		if($error){
			return array('db_error' => $error);
		}else {
			return false;
		}
	}
	
	static public function Delete($id)
	{
		$conn = GetConnection();
		$sql =	" DELETE From Keywords WHERE id=$id ";
				
		$conn->query($sql);
		//echo $sql; 
		$error = $conn->error;		
		$conn->close();
		//$error = "dd";
		if($error){
			return array('db_error' => $error);
		}else {
			return false;
		}		
	}
	
	static public function Validate($row)
	{
		$errors = array();
		if(!is_numeric($row['parent_id'])) $errors['parent_id'] = 'must be a number';
		if(!$row['parent_id']) $errors['parent_id'] = 'id required';
		if(!$row['Name']) $errors['Name'] = 'id required';
		
		return count($errors) ? $errors : null;
	}
	
	static function Encode($row, $conn)
	{
		$row2 = array();
		foreach ($row as $key => $value) {
			$row2[$key] = $conn->real_escape_string($value);		
		}
		return $row2;
	}
}
