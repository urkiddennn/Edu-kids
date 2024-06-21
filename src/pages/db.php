<?php

function getDatabaseConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "edukids";

    $connection = new mysqli($servername, $username, $password, $database);
    if($connection->connect_error){
        die("Error failed to connect: " . $connection->connect_error);
    }

    return $connection;
}