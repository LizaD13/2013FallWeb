<?php

/**
 * 
 */
class Emails {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT U.*, US.LastName as User, E.Name as EmailType
						FROM 
						Emails U
							Join 
							Keywords E ON U.`Email_Type`=E.id
							Join
							Users US ON U.Users_id =US.id
						WHERE U.id=$id
					";
			return fetch_one($sql);			
		}else{
			$sql = "	SELECT U.*, US.LastName as User, E.Name as EmailType
						FROM 
						Emails U
							Join 
							Keywords E ON U.`Email_Type`=e.id
							Join
							Users US ON U.Users_id =US.id
						
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
		$row2 = Emails::Encode($row, $conn);
		if($row['id']){
			$sql =	" UPDATE Emails "
				.	" Set Users_id='$row2[Users_id]', Email_Address='$row2[Email_Address]', Email_Type='$row2[Email_Type]' "
				.	" WHERE id=$row2[id] ";
		}else{
			$sql = 	" Insert Into Emails (Users_id, Email_Address, Email_Type) "
				.	" Values ('$row2[Users_id]', Email_Address='$row2[Email_Address]', Email_Type='$row2[Email_Type]') ";			
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
		$sql =	" DELETE From Emails WHERE id=$id ";
				
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
		if(!$row['Users_id']) $errors['Users_id'] = 'required';
		if(!$row['Email_Address']) $errors['Email_Address'] = 'required';
		if(!$row['Email_Type']) $errors['Email_Type'] = 'required';
		
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
