<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'details':
		$model  = Users::Get($_REQUEST['id']);
		$view 	= 'details.php';
		$title	= "Details for: $model[FirstName] $model[LastName]"	;	
		break;
		
	case 'new':
		$model = Users::Blank();
		$view 	= 'edit.php';		
		$title	= "Create New User"	;	
		break;
	
	case 'save':
		$errors = Users::Validate($_REQUEST);
		if(!$errors){
			$errors = Users::Save($_REQUEST);			
		}
		if(!$errors){
			if($format == 'plain' || $format == 'json'){
				$view = 'item.php';
				$rs = $model = Users::Get($_REQUEST['id']);
			}else{
				header("Location: ?status=Saved&id=$_REQUEST[id]");
				die();				
			}
		}else{
			$model = $_REQUEST;
			$view = 'edit.php';
			$title	= "Edit: $model[FirstName] $model[LastName]"	;			
		}		
		break;
		
	case 'edit':
		$model  = Users::Get($_REQUEST['id']);
		$view 	= 'edit.php';		
		$title	= "Edit: $model[FirstName] $model[LastName]"	;	
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
			$errors = Users::Delete($_REQUEST['id']);			
			if(!$errors){
				header("Location: ?");
				die();
			}							
		}
		$model  = Users::Get($_REQUEST['id']);
		$view 	= 'delete.php';					
		$title	= "Edit: $model[FirstName] $model[LastName]"	;	
		break;
	
	case 'categories':
		$model  = Product_Categories::Get();
		//$view 	= 'list.php';
		break;

	case 'list':
		$model  = Products::GetItemsInCategory($_REQUEST['CategoryId']) ;
		//$view 	= 'list.php';
		break;
		
	default:
		$model  = array ('LastName' => null, 'Password' => null);
		$view 	= 'home.php';
		$title	= 'Home';		
		break;
}

switch ($format) {
	case 'dialog':
		include '../Shared/_DialogLayout.php';				
		break;
		
	case 'plain':
		include $view;
		break;
		
	case 'json':
		echo json_encode(array('model'=> $model, 'errors'=> $errors));
		break;
	
	default:
		include '../Shared/_PublicLayout.php';		
		break;
}

