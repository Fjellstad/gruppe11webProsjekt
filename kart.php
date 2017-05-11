<?php
include ("search.php");
//include ("JSvariabler.php");
require("phpsqlajax_dbinfo.php");






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

    <div id="mapContainer">
        <script>
            var customLabel = {
                restaurant: {
                    label: 'R'
                },
                bar: {
                    label: 'B'
                }
            };


            function initMap() {
                var map = new google.maps.Map(document.getElementById('mapContainer'), {
                    center: new google.maps.LatLng(-33.863276, 151.207977),
                    zoom: 12
                });
                var infoWindow = new google.maps.InfoWindow;

                // Change this depending on the name of your PHP or XML file
                downloadUrl('search.php', function(data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName('marker');
                    Array.prototype.forEach.call(markers, function(markerElem) {
                        var id = markerElem.getAttribute('id');
                        var name = markerElem.getAttribute('name');
                        var address = markerElem.getAttribute('address');
                        var type = markerElem.getAttribute('type');
                        var point = new google.maps.LatLng(
                            parseFloat(markerElem.getAttribute('lat')),
                            parseFloat(markerElem.getAttribute('lng')));

                        var infowincontent = document.createElement('div');
                        var strong = document.createElement('strong');
                        strong.textContent = name
                        infowincontent.appendChild(strong);
                        infowincontent.appendChild(document.createElement('br'));

                        var text = document.createElement('text');
                        text.textContent = address
                        infowincontent.appendChild(text);
                        var icon = customLabel[type] || {};

                        var marker = new google.maps.Marker({
                            map: map,
                            position: point,
                            label: icon.label
                        });
                        marker.addListener('click', function() {
                            infoWindow.setContent(infowincontent);
                            infoWindow.open(map, marker);
                        });
                    });
                });
            }


            /*function initMap() {
                var map = new google.maps.Map(document.getElementById('mapContainer'), {
                    zoom: 15,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });*/



            }
            function downloadUrl(search.php,callback) {
                var request = window.ActiveXObject ?
                    new ActiveXObject('Microsoft.XMLHTTP') :
                    new XMLHttpRequest;

                request.onreadystatechange = function() {
                    if (request.readyState == 4) {
                        request.onreadystatechange = doNothing;
                        callback(request, request.status);
                    }
                };

                request.open('GET', url, true);
                request.send(null);
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