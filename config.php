<?php
//$host =  'localhost';
$port = 8889;
$username = 'root';
$password = 'root';
$database = 'kart_webprosjekt';
//$dbname = "maps";


try{
    $connection = new PDO("mysql:host={$host};dbname={$database};port={$port};", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("SET CHARACTER SET utf8");
}catch (PDOException $e){
    echo $e->getMessage();
}
