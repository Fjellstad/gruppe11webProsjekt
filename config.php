<?php
$host = "tek.westerdals.no";
$username = "sarmad16";
$password = "Kolkin123";
$dbname = "sarmad16_MapAndEvents";
$port = 3306;

try{
    $connection = new PDO("mysql:host={$host};dbname={$dbname};port={$port};", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("SET CHARACTER SET utf8");
}catch (PDOException $e){
    echo $e->getMessage();
}
?>