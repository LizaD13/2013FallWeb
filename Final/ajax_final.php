<?php 

function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'plotkinm', ‘FaceBooK’, 'plotkinm_db');
	return $conn;
}