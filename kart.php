<?php
include("config.php");

function parseToXML($htmlStr)
{
    $xmlStr = str_replace('<', '&lt;', $htmlStr);
    $xmlStr = str_replace('>', '&gt;', $xmlStr);
    $xmlStr = str_replace('"', '&quot;', $xmlStr);
    $xmlStr = str_replace("'", '&#39;', $xmlStr);
    $xmlStr = str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;
}


// Set the active MySQL database
/*$db_selected = PDO::query  ($dbname,$connection);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}*/




//$result =  PDO::query ( $query);

if (!$result) {
//    die('Invalid query: ' . mysql_error());
}

// Start XML file, echo parent node
echo '<kart_webprosjekt>';

// Iterate through the rows, printing XML nodes for each
/*while ($row = @mysql_fetch_assoc($result)){
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


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/kart.css" type="text/css" rel="stylesheet">

    <title>Kart</title>

</head>
<body>

<div id="header">
    <div id="headerLogo">
    <a href="index.html"><img id="wLogo" src="css/bilder/Logo150px.png"></a>
</div>
<a href="www.facebook.com"><img id="facebook" src="css/bilder/facebook.png"></a>
<a href="www.twitter.com"><img id="twitter" src="css/bilder/twitter.png"></a>
<a href="www.instagram.com"><img id="instagram" src="css/bilder/instagram.png"></a>
<div id="menu" class="menuText">
    <a href="www.vg.no"><p id="bolig">Bolig</p></a>
    <a href="www.facebook.no"><p id="kart">Kart</p></a>
    <a href="www.vg.no"><p id="transport">Transport</p></a>
    <a href="www.vg.no"><p id="mat">Mat og drikke</p></a>
    <a href="www.vg.no"><p id="helse">Helse</p></a>
    <a href="www.vg.no"><p id="eventer">Eventer</p></a>
</div>
</div>

<!-- Container -->
<div class="container">

    <div id="velkommenWrapper">
        <div id="textWrapper">
            <h1 id="kartTitle">KART - FÅ FULL OVERSIKT</h1>
            <h2 id="kartInfo">
                Trykk på knappene på siden for å finne steder.</h2>
        </div>
    </div>

    <form id="navigatorContainer">
        <a href="">
            <div id="buttonBolig" class="button"><p onclick="type()">Bolig</p> </div>
        </a>
        <a href="">
            <div id="buttonTransport" class="button"><p onclick="type()">Transport</p></div>
        </a>
        <a href="">
            <div id="buttonMat" class="button"><p onclick="type()">Mat</p></div>
        </a>
        <a href="">
            <div id="buttonHelse" class="button"><p onclick="type()">Helse</p></div>
        </a>
        <a href="">
            <div id="buttonEvent" class="button"><p onclick="type()">Event</p></div>
        </a>

    </form>

    <div id="mapContainer">
        <script>
            function initMap() {
                var uluru = {lat: 59.922336, lng: 10.751484};
                var map = new google.maps.Map(document.getElementById('mapContainer'), {
                    zoom: 15,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map


                });
            }

        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBywTFmLABBq-v9e2L5SJF0VKGJ9Ia3pxQ&callback=initMap">
        </script>

    </div>


    <!-- Container avsluttes -->
</div>


<!-- Footer -->
<div id="footer">
    <!-- Footer avsluttes -->
</div>

<script src="JSvariabler.php"></script>
</body>
</html>