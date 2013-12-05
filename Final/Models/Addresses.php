<?php

/**
 * 
 */
class Addresses {
	
	static public function Get($id=null)
	{
		$sql = 	" SELECT A.*, US.LastName as User, K.Name as AddressType
						FROM 
						Addresses A
							Join 
							Keywords K ON A.`Address_Type`=K.id
							Join
							Users US ON A.Users_id =US.id ";
							
		if(isset($id)){
			$sql .= " WHERE A.id=$id ";
			return fetch_one($sql);			
		}else{
			
			return fetch_all($sql);			
		}
	}
	
	static public function Blank()
	{
		return array( 'id'=>null, 'address'=> null,'city'=> null,'state'=> null,'zip'=> null, 'Users_id'=> null,'Address_Type'=> null );
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Addresses::Encode($row, $conn);
		if($row['id']){
			$sql =	" UPDATE Addresses "
				.	" Set address='$row2[address]', city='$row2[city]', state='$row2[state]', zip='$row2[zip]', Users_id='$row2[Users_id]' Address_Type='$row2[Address_Type]' "
				.	" WHERE id=$row2[id] ";
		}else{
			$sql = 	" Insert Into Addresses (address, city, state, zip, Users_id, Address_Type) "
				.	" Values ('$row2[address]', '$row2[city]', '$row2[state]', '$row2[zip]', '$row2[Users_id]' '$row2[Address_Type]') ";			
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
		$sql =	" DELETE From Addresses WHERE id=$id ";
				
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
		if(!$row['street']) $errors['street'] = 'street required';
		if(!$row['city']) $errors['city'] = 'city required';
		if(!$row['state']) $errors['state'] = 'state required';
		if(!$row['zip']) $errors['zip'] = 'zip required';
		if(!$row['Address_Type']) $errors['Address_Type'] = 'id required';
		
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
