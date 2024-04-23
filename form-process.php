<?php 

//Linking configuration file
require_once 'config.php';

//if(isset($_POST['button-submit'])){
    $id = $_POST['userid'];
    $name = $_POST['username'];

    $sql = "INSERT INTO user(userid, username) VALUES ('$id', '$name')";

    if($connection->query($sql)){
        echo "Inserted successfully";
    } else {
        echo "Error: ".$connection->error;
    }

    $connection->close();

    header("location: index.php");

//}


?>