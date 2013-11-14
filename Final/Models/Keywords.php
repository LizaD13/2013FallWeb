<?php

/**
 * 
 */
class Keywords {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM Keywords');
	}
	static public function GetSelectListFor($id)
	{
		return fetch_all("SELECT id, Name FROM Keywords WHERE `Parent_id`=$id ");
	}
	
	
}
