<?php
/**
 * Created by PhpStorm.
 * User: Mads-power
 * Date: 04.05.2017
 * Time: 16.07
 */
include("config.php");

/*function test()
{
    require("config.php");
// Select all the rows in the markers table
    $stmt = $connection->prepare("SELECT * FROM kart_webprosjekt WHERE id = 1, 2, 5 ");
//$query = "SELECT * FROM kart_webprosjekt WHERE  1";
    $stmt->execute(array(':type' => "apotek"));
    $result = $stmt->fetchAll();

//    return json_encode($result);
//    var_dump($result);
}

test();*/
try{
    $connection = new PDO("mysql:host={$host};dbname={$dbname};port={$port};", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("SET CHARACTER SET utf8");
}catch (PDOException $e){
    echo $e->getMessage();
}
$query = "SELECT * FROM markers WHERE 1, 2, 5";


?>