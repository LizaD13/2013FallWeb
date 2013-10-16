<?php 
include_once '../../inc/_global.php';

$model = Email_Type::Get();
$view  = 'list.php';

include '../Shared/_Layout.php';