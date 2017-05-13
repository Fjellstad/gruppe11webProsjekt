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
            <div id="buttonBolig" class="button"><p onclick="Clicked()">Bolig</p></div>
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

        <script>
            var map;
            var myLatLng ={lat: 59.923321,lng: 10.752427};
            var cords = [
                ['Bondi Beach',  59.923426, 10.751531 , 4],
                ['Coogee Beach', 59.923098, 10.751214, 5],
                ['Coogee Beach', 59.922633, 10.751010, 5]

            ]
            function initMap() {

                map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    zoom: 16

                });

                var marker,i;


                for(i = 0; i < cords.length; i++){
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(cords[i][1], cords[i][2]),
                        map: map,
                        visible: true


                    })
                }
                function myFunction() {
                    var x = document.getElementById("button").onclick;

                    marker.setVisible(true);
                }












            }
        </script>


        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvFzSBmeyXX-eBNAu-5hRcpXv2eH-clzc &callback=initMap">
        </script>
    </div>


    <!-- Container avsluttes -->
</div>


<!-- Footer -->
<div id="footer">
    <!-- Footer avsluttes -->
</div>

<!--<script src="JSvariabler.php"></script>-->
</body>
</html>