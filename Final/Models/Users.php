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
	
	/* leaves all the user input sections blank isntead of showing error */
	static public function Blank(){
		return array( 'FirstName' => null, 'LastName' => null, 'Password' => null, 'UserType' => null, 'FBID' => null);
	}
	
	/* make sure all neccessay input is there more code needed in Views/Users/Index.php & ../new*/
	static public function Validate($row){
		$errors = array();
		if(!$row['FirstName']) $errors['FirstName'] = 'is required';
		if(!$row['LastName']) $errors['LastName'] = 'is required';
		if(!is_numeric($row['UserType'])) $errors['UserType'] = 'must be a number';
		if(!$row['UserType']) $errors['UserType'] = 'is required!';
		
		if(count($errors) == 0){
			return false;
		}else{
			return $errors;
		}
	}
}
 