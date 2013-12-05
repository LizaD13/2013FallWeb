<?
	include "../../inc/_global.php";
	session_start();
	$model = Products::Get();
	include "Home.php";
	include "../Shared/_PublicLayout.php";

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	
	case "products";
		$model = Products::GetCategories();
		break;
	
	case 'categories';
		$model = Products::GetByCategory($_REQUEST);
		break;
	
	case 'addToCart':
		if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array ();
		$cart = $_SESSION['cart'];
		$cart[] = $_REQUEST['id'];
		$_SESSION['cart'] = $cart;
		header('Location: ?'); die();
		break;
			
	default:
		// $model  = Users::Get();
		$view 	= 'Home.php';
		$title	= 'Store';		
		break;
}

switch ($format) {
	case 'dialog':
		include '../Shared/_DialogLayout.php';				
		break;
	
	case 'plain':
		include $view;
		break;
		
	case 'json';
		echo json_encode(array('model' => $model, 'erroes' => $errors));
		break;
	
	default:
		include '../Shared/_PublicLayout.php';		
		break;
}

