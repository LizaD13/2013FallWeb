<?php

/**
 * 
 */
class Keywords {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM 2013Fall_Keywords');
	}
	static public function GetSelectListFor($id)
	{
		return fetch_all("SELECT id, Name FROM 2013Fall_Keywords WHERE `Parent_id`=$id ");
	}
	
	
}
