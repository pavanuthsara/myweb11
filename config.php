<?php 

$connection = new mysqli("localhost", "root", "root", "myweb11");

if($connection->connect_error){
    die("Connection failed: ".$connection->connect_error);
}
?>