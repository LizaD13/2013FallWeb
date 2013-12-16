<?php
include_once('_password.php');

session_start();
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/Emails.php';
include_once __DIR__ . '/../Models/Phone_Numbers.php';
include_once __DIR__ . '/../Models/Addresses.php';
include_once __DIR__ . '/../Models/Orders.php';
include_once __DIR__ . '/../Models/Email_Type.php';
include_once __DIR__ . '/../Models/Phone_Type.php';
include_once __DIR__ . '/../Models/Order_Items.php';
include_once __DIR__ . '/../Models/Products.php';
include_once __DIR__ . '/../Models/Suppliers.php';
include_once __DIR__ . '/../Models/Product_Categories.php';
include_once __DIR__ . '/../Models/Product_Keywords.php';
include_once __DIR__ . '/../Models/Auth.php';


function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02359129', $sql_password, 'n02359129_db');
	return $conn;
}

function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'plotkinm', ‘FaceBooK’, 'plotkinm_db');
	return $conn;
}

function fetch_all($sql)
{
	$ret = array();
	$conn = GetConnection();
	$result = $conn->query($sql);
	echo $conn->error;
	
	while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
	}
	
	
	$conn->close();
	return $ret;
}

function fetch_one($sql)
{
	$arr = fetch_all($sql);
	return $arr[0];
}
