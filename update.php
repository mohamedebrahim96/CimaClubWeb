<?php 
header('Content-Type: application/json');

$foo = new StdClass();
$foo->versioncode = 1;
$foo->versionname = "1.0";
$foo->massage = "new update and add more featurs -fix bugs";


$json = json_encode($foo);
echo $json;

?> 