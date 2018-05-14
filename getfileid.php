<?php
include "connection.php";
header('Content-Type: application/json');

$statement = $conn->prepare("SELECT file_id FROM movies WHERE id= '".$_GET['id']."' "); 
$statement->execute(); 


$row = $statement->fetch();
if($row<1){
    echo "null";

}else{
    echo "{$row['file_id']}";

}

?>