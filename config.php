<?php
//$host = "tek.westerdals.no";
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "events";
//$dbname = "maps";
$port = 8889;

try{
    $connection = new PDO("mysql:host={$host};dbname={$dbname};port={$port};", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("SET CHARACTER SET utf8");
}catch (PDOException $e){
    echo $e->getMessage();
}
