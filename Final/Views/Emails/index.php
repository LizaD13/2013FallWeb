<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'details':
		$model  = Emails::Get($_REQUEST['id']);
		$view 	= 'details.php';
		$title	= "Details for: $model[Email_Address]"	;	
		break;
		
	case 'new':
		$model = Emails::Blank();
		$view 	= 'edit.php';		
		$title	= "Create New Email Address"	;	
		break;
	
	case 'save':
		$errors = Emails::Validate($_REQUEST);
		if(!$errors){
			$errors = Emails::Save($_REQUEST);			
		}
		if(!$errors){
			if($format == 'plain' || $format == 'json'){
				$view = 'item.php';
				$rs = $model = Emails::Get($_REQUEST['id']);
			}else{
				header("Location: ?status=Saved&id=$_REQUEST[id]");
				die();
			}
		}else{
			$model = $_REQUEST;
			$view = 'edit.php';
			$title	= "Edit: $model[Email_Address]"	;	
		}			
			
		break;
		
	case 'edit':
		$model  = Emails::Get($_REQUEST['id']);
		$view 	= 'edit.php';		
		$title	= "Edit: $model[Email_Address]"	;	
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
			$errors = Emails::Delete($_REQUEST['id']);			
			if(!$errors){
				header("Location: ?");
				die();
			}							
		}
		$model  = Emails::Get($_REQUEST['id']);
		$view 	= 'delete.php';					
		$title	= "Edit: $model[Email_Address]"	;	
		break;
	
	default:
		$model  = Emails::Get();
		$view 	= 'list.php';
		$title	= 'Emails';		
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
		include '../Shared/_Layout.php';		
		break;
}

