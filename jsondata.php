<?php
include "connection.php";
header('Content-Type: application/json');
$statement=$conn->prepare("SELECT * FROM movies");
$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($results);
echo $json;
?>