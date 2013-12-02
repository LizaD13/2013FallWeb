<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'details':
		$model  = Keywords::Get($_REQUEST['id']);
		$view 	= 'details.php';
		$title	= "Details for: $model[Name]"	;	
		break;
		
	case 'new':
		$model = Keywords::Blank();
		$view 	= 'edit.php';		
		$title	= "Create New Keyword"	;	
		break;
	
	case 'save':
		$errors = Keywords::Validate($_REQUEST);
		if(!$errors){
			$errors = Keywords::Save($_REQUEST);			
		}
		if(!$errors){
			if($format == 'plain' || $format == 'json'){
				$view = 'item.php';
				$rs = $model = Keywords::Get($_REQUEST['id']);
			}else{
				header("Location: ?status=Saved&id=$_REQUEST[id]");
				die();
			}
		}else{
			$model = $_REQUEST;
			$view = 'edit.php';
			$title	= "Edit: $model[Name]"	;	
		}			
			
		break;
		
	case 'edit':
		$model  = Keywords::Get($_REQUEST['id']);
		$view 	= 'edit.php';		
		$title	= "Edit: $model[Name]"	;	
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
			$errors = Keywords::Delete($_REQUEST['id']);			
			if(!$errors){
				header("Location: ?");
				die();
			}							
		}
		$model  = Keywords::Get($_REQUEST['id']);
		$view 	= 'delete.php';					
		$title	= "Edit: $model[Name]"	;	
		break;
	
	default:
		$model  = Keywords::Get();
		$view 	= 'list.php';
		$title	= 'Keywords';		
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

