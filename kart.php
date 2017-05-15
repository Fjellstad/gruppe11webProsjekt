


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
<?php include 'header.php';?>



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
    <div id="buttonHelse" class="button"> <button onclick="helseCords()">Helse</button> </div>
    <div id="buttonEvent" class="button"><button onclick="eventCords()">Event</button></div>
    <div id="buttonMat" class="button"><button onclick="matCords()">Mat</button></div>
    <div id="buttonTransport" class="button"><button onclick="click()">Transport</button></div>
    <div id="buttonBolig" class="button"><button onclick="click()">Bolig</button></div>
    <div id="map">

        <script>
            var map;
            var myLatLng ={lat: 59.923321,lng: 10.752427};
            var Hcords = [
                ['Vitusapotek Vulkan', 59.923526,10.750798, 4],
                ['Apotek 1 Grünerløkka', 59.923496, 10.757125, 5],
                ['Apotek 1 Legevakten', 59.917079,10.758761, 6],
                ['Sio Athletica Vulkan',59.923170,10.752157,7],
                ['Fitness24seven',59.921711,10.757207,8],
                ['SATS Schous plass',59.919106,10.760330,9],
                ['EVO Grunerløkka ',59.920048,10.759860,10],
                ['legevakten grunerløkka ',59.917079,10.758761,11]
            ]

            var matcords = [
                ['Mathallen',59.922098, 10.751949,12],
                ['REMA 1000 Vulkan',59.923227, 10.751380,13],
                ['Døgnvill Burger Vulkan',59.921854, 10.751396,14],
                ['Lucky Bird',59.922239, 10.751517,7],
                ['Vulkanfisk,Hitchhiker,Smelteverket, Pizzavino',59.922157, 10.752142,15],
                ['Ristorante Ferro',59.922257, 10.750683,16],
                ['Pokalen Sportsklubb',59.921813, 10.751786,17],
                ['Stangeriet',59.922544, 10.752117,18],
                ['BAR Vulkan',59.922249, 10.751495,19],
                ['La Crêpe d’Elen',59.921813, 10.751743,20]
            ]

            var eventcords = [
                ['Blå',59.920144, 10.752756,13]
            ]


            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    zoom: 14
                });

                var marker,i;
                document.getElementById("buttonHelse").addEventListener("click", matCords);
                document.getElementById("buttonMat").addEventListener("click", helseCords);
                document.getElementById("buttonEvent").addEventListener("click", eventCords);



                function helseCords() {
                    initMap();
                    for (i = 0; i < matcords.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(matcords[i][1], matcords[i][2]),
                            map: map,
                            label: { text: 'M' },
                            visible: true
                        })
                    }

                    // marker.setVisible(true);
                }
                function matCords() {
                    initMap();
                    for (i = 0; i < Hcords.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(Hcords[i][1], Hcords[i][2]),
                            map: map,
                            label: { text: 'H' },
                            visible: true
                        })
                    }
                }
                function eventCords() {
                    initMap();
                    for (i = 0; i < eventcords.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(eventcords[i][1], eventcords[i][2]),
                            map: map,
                            label: { text: 'E' },
                            visible: true
                        })
                    }
                }
            }

        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvFzSBmeyXX-eBNAu-5hRcpXv2eH-clzc &callback=initMap">
        </script>
    </div>


    <!-- Container avsluttes -->
</div>

<?php include 'footer.php';?>

<!--<script src="JSvariabler.php"></script>-->
</body>
</html>