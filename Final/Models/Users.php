<?php

/**
 * 
 */
class Users {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_all("SELECT * FROM 2013FALL_USERS WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM 2013FALL_USERS');
		} 				
	}	
	
	static public function Save($row)
	{
		$sql = 	" Insert Into 2013FALL_USERS (FistName, LastName, Password, UserType) "
			.	" Values ('$row[FirstName]', '$row[LastName]', '$row[Password]', '$row[UserType]',) ";
		$conn = GetConnection();
		$conn->query($sql);
		$error = $conn->error;
		$conn->close();
		
		if($error) {
			return array('db_error' => $error);
		}else {
			return false;
		}
	}
}
 