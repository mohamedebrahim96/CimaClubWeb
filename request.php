<?php
include "connection.php";


$sthandler = $conn->prepare("SELECT movie_id FROM `request` WHERE movie_id = :movie_id");
$sthandler->bindParam(':movie_id', $_POST['movie_id']);
$sthandler->execute();

if($sthandler->rowCount() > 0){
    echo "exists! cannot insert";
} else {
            $sql = "INSERT INTO `request` (`movie_id`, `title`) VALUES (:movie_id, :title)";
            $statement = $conn->prepare($sql);
            $statement->bindValue(':movie_id', $_POST['movie_id']);
            $statement->bindValue(':title', $_POST['title']);
            $inserted = $statement->execute();
            if($inserted){
                echo "Done!";
            }                                           
}


?>