<?php

/**
 * 
 */
class Users {
	
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
	
	static public function Blank()
	{
		return array( 'id'=>null, 'FirstName'=> null,'LastName'=> null,'Password'=> null,'keywords_id'=> null );
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Users::Encode($row, $conn);
		if($row['id']){
			$sql =	" UPDATE Users "
				.	" Set FirstName='$row2[FirstName]', LastName='$row2[LastName]', Password='$row2[Password]', keywords_id='$row2[keywords_id]' "
				.	" WHERE id=$row2[id] ";
		}else{
			$sql = 	" Insert Into Users (FirstName, LastName, Password, keywords_id) "
				.	" Values ('$row2[FirstName]', '$row2[LastName]', '$row2[Password]', '$row2[keywords_id]') ";			
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
		$sql =	" DELETE From Users WHERE id=$id ";
				
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
		if(!$row['FirstName']) $errors['FirstName'] = 'id required';
		if(!$row['LastName']) $errors['LastName'] = 'id required';
		if(!is_numeric($row['keywords_id'])) $errors['keywords_id'] = 'must be a number';
		if(!$row['keywords_id']) $errors['keywords_id'] = 'id required';
		
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
