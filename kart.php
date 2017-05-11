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

            var map;

            function initMap() {



                var myLatLng = new google.maps.LatLng(59.923382, 10.752486);

                var myOptions = {
                    zoom: 19,
                    center: myLatLng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };


               var map = new google.maps.Map(document.getElementById('mapContainer'), myOptions);


               /* var marker = new google.maps.Marker({
                    position: treningsMarkers,
                    map: map,
                    title: 'Hello World!'
                });*/

                var treningsMarkers =[ ['Sio Athletica Vulkan',59.923170, 10.752157,1],
                    ['Fitness24seven',  59.921711, 10.757207,2],
                    ['SATS Schous plass',59.919106, 10.760330,3],
                    ['EVO Grunerløkka',59.920048, 10.759860, 4]
                    ];

                for (var i = 0; i < treningsMarkers.length; i++) {
                    var treningsM = treningsMarkers [i]
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng (treningsM[1], treningsM[2]),
                        map: map,
                        title: treningsM[1],
                        zIndex: treningsM[3]
                    });
                }



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