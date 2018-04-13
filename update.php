<?php 
header('Content-Type: application/json');

$foo = new StdClass();
$foo->versioncode = 1;
$foo->versionname = "1.0";
$foo->title = "SOFTWARE UPDATE FAILED";
$foo->message = "حمل التحديث يسطا وبلاش استعباط";
$foo->download_link = "";


$json = json_encode($foo);
echo $json;

?> 