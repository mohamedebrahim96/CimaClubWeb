<?php 
$string = file_get_contents('./string.json');

$string = "Hellow rosld";
$json = json_decode($string);
echo $json;



?> 