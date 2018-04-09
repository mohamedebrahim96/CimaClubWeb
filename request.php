<?php
include "connection.php";
if(isset($_POST['post']))
{
    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO request(movie_id,title)
    VALUES (
     '".$_POST["movie_id"]."'
    ,'".$_POST["title"]."'
    )";
    $conn->exec($sql);
    echo "New request created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
   
}
?>