<?php

$host = "tek.westerdals.no";
/*$host = "localhost";
$username = "root";
$password = "root";
$dbname = "events";
$port = 8888;*/


$port = 3306;
$username = 'sarmad16';
$password = 'Kolkin123';
//$database = 'kart_webprosjekt';
$dbname = "sarmad16_Events";


try{
    $connection = new PDO("mysql:host={$host};dbname={$dbname};port={$port};", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("SET CHARACTER SET utf8");
}catch (PDOException $e){
    echo $e->getMessage();
}



