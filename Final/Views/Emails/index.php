<?php 
include_once '../../inc/_global.php';

$model = Emails::Get();
$view  = 'list.php';

include '../Shared/_Layout.php';