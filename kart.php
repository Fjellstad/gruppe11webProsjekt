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

    <!--<div id="navigatorContainer">
        <a href="">

        </a>
        <a href="">

        </a>
        <a href="">

        </a>
        <a href="">

        </a>
        <a href="">

        </a>-->

    </div>
    <div id="buttonHelse" class="button"> <button onclick="click()">Helse</button> </div>
    <div id="buttonEvent" class="button"><button onclick="click()">Event</button></div>
    <div id="buttonMat" class="button"><button onclick="click()">Mat</button></div>
    <div id="buttonTransport" class="button"><button onclick="click()">Transport</button></div>
    <div id="buttonBolig" class="button"><button onclick="click()">Bolig</button></div>
    <div id="map">

        <script>
            var map;
            var myLatLng ={lat: 59.923321,lng: 10.752427};
            var cords = [
                ['Vitusapotek Vulkan', 59.923526,10.750798, 4],
                ['Apotek 1 Grünerløkka', 59.923496, 10.757125, 5],
                ['Apotek 1 Legevakten', 59.917079,10.758761, 6],
                ['Sio Athletica Vulkan',59.923170,10.752157,7],
                ['Fitness24seven',59.921711,10.757207,8],
                ['SATS Schous plass',59.919106,10.760330,9],
                ['EVO Grunerløkka ',59.920048,10.759860,10],
                ['legevakten grunerløkka ',59.917079,10.758761,11]
            ]

            var bCords = [
                ['b1',59.923393, 10.750128,7],
                ['b2',59.922215, 10.749624,8]

            ]


            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    zoom: 14
                });

                var marker,i;
                document.getElementById("buttonHelse").addEventListener("click", click);

                for (i = 0; i < bCords.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(bCords[i][1], bCords[i][2]),
                        map: map,
                        visible: false
                    })
                }

                for (i = 0; i < cords.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(cords[i][1], cords[i][2]),
                        map: map,
                        visible: false
                    })
                }

                /*function click() {
                 for (var j = 0; j < marker.length; j++)
                 marker[i].onclick =  marker.visible(true);
                 }*/
                //fungerer på 1 marker
                function click() {
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