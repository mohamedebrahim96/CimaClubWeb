<?php 
header('Content-Type: application/json');

$foo = new StdClass();
$foo->versioncode = 2;
$foo->versionname = "1.0";
$foo->title = "SOFTWARE UPDATE FAILED";
$foo->message = "new update and add more featurs -fix bugs";


$json = json_encode($foo);
echo $json;

?> 