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
	
	/* tells computes to update existing information or add a new contact */
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Users::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE 2013Fall_Users "
				.	" Set FirstName= '$row2[FirstName]' LastName ='$row2[LastName]' Password = '$row2[Password]' UserType = '$row2[UserType]'"
				.	" WHERE id=$row2[id] ";
		}else
		$sql = 	" Insert Into 2013FALL_USERS (FistName, LastName, Password, UserType) "
			.	" Values ('$row2[FirstName]', '$row2[LastName]', '$row2[Password]', '$row2[UserType]',) ";
		
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
	
	/* make sure all neccessay input is there more code needed in Views/Users/Index.php & ../edit */
	static public function Validate($row){
		$errors = array();
		if(!$row['FirstName']) $errors['FirstName'] = 'is required';
		if(!$row['LastName']) $errors['LastName'] = 'is required';
		if(!is_numeric($row['UserType'])) $errors['UserType'] = 'must be a number';
		if(!$row['UserType']) $errors['UserType'] = 'is required!';
		
		return count($errors) ? $errors : null;
		}
		
		static function Encode($row, $conn)
		{
			$row2 = array();
			foreach ($row as $key => $value) {
				$trow2[$key] = $conn->real_escape_string();
			}
			return $row2;
		}
	}

 