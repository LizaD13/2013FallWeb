<?php 
include_once '../../inc/_global.php';

$model = Product_Categories::Get();
$view  = 'list.php';

include '../Shared/_Layout.php';