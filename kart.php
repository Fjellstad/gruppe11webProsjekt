<?php
//include ("search.php");
//include ("JSvariabler.php");
//require("phpsqlajax_dbinfo.php");





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
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
</head>
<body>


<div id="header">
    <div id="headerLogo">
    <a href="index.html"><img id="wLogo" src="css/bilder/Logo150px.png"></a>
</div>
<a href="www.facebook.com"><img id="facebook" src="bilder/facebook.png"></a>
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
            <div id="buttonBolig" class="button"><p onclick="Clicked()">Bolig</p> </div>
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

    <div id="map">

        <script type="text/javascript">

            var locations = [
                ['Sio Athletica Vulkan', 59.923170, 10.752157, 4],
                ['Fitness24seven', 59.921711, 10.757207, 5],
                ['SATS Schous plass', 59.919106, 10.760330, 3],
                ['EVO Grunerløkka ',59.920048,10.759860, 2],
                //['Maroubra Beach', -33.950198, 151.259302, 1]
            ];

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng(-33.92, 151.25),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }





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