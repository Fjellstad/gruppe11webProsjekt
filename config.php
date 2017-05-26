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


/*$host = "tek.westerdals.no";
$port = 3306;
$username = "sarmad16";
$password = "Kolkin123";
$dbname = "sarmad16_Events";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



