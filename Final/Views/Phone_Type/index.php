<?php 
include_once '../../inc/_global.php';

$model = Phone_Type::Get();
$view  = 'list.php';

include '../Shared/_Layout.php';