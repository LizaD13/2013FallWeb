<?php
include_once('_password.php');

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


function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'lizad13', $sql_password, 'lizad13_db');
	return $conn;
}
