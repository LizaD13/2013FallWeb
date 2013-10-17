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
	
}
 