<?php
/**
 * Created by PhpStorm.
 * User: Mads-power
 * Date: 04.05.2017
 * Time: 16.07
 */
include("config.php");




function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
}

// Opens a connection to a MySQL server
$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {
    die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM kart_webprosjekt WHERE 1";
$result = mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<kart_webprosjekt>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
    // Add to XML document node
    echo '<marker ';
    echo 'id="' . $ind . '" ';
    echo 'name="' . parseToXML($row['name']) . '" ';
    echo 'address="' . parseToXML($row['address']) . '" ';
    echo 'lat="' . $row['lat'] . '" ';
    echo 'lng="' . $row['lng'] . '" ';
    echo 'type="' . $row['type'] . '" ';
    echo '/>';
}

// End XML file
echo '</kart_webprosjekt>';









//HER STARTER FORSKJELLIGE TESTER AV PHP


/*$btnPush = [];
$btnresult= "helse";


$sql = ("SELECT * FROM kart_webprosjekt WHERE kategory LIKE '$btnresult'") or die("kunne ikke kople til");

$res = $connection->query($sql);
$statement = $connection->prepare($sql);
$statement->execute();
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $btnPush[] = $row;
}
var_dump("hest" . $btnPush);
echo $btnPush;










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

/*while ($r = $query->fetch(PDO::FETCH_ASSOC)){
echo $r;
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<kart_webprosjekt>';

    // Iterate through the rows, printing XML nodes for each
    while ($row = PDO::FETCH_ASSOC($result)){
    // Add to XML document node
    echo '<marker ';
    echo 'id="' . $ind . '" ';
    echo 'name="' . parseToXML($row['name']) . '" ';
    echo 'address="' . parseToXML($row['address']) . '" ';
    echo 'lat="' . $row['lat'] . '" ';
    echo 'lng="' . $row['lng'] . '" ';
    echo 'type="' . $row['type'] . '" ';
    echo '/>';

    }
    // End XML file
    echo '</kart_webprosjekt>';*/


/*function parseToXML($htmlStr)
{
$xmlStr = str_replace('<', '&lt;', $htmlStr);
$xmlStr = str_replace('>', '&gt;', $xmlStr);
$xmlStr = str_replace('"', '&quot;', $xmlStr);
$xmlStr = str_replace("'", '&#39;', $xmlStr);
$xmlStr = str_replace("&", '&amp;', $xmlStr);
return $xmlStr;
}




// Select all the rows in the kart_webprosjekt table
$query = $connection->query("SELECT * FROM kart_webprosjekt");*/