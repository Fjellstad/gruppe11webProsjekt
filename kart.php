


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
<div id="container">
    
            <div id="welcomeWrapper">
            <h1>KART</h1>
            <h2 id="welcomeInfo">Trykk på de ulike knappene for 
            <br>å finne stedene</h2>  
        </div>

    <!--Her opprettes onclick som tar inn funksjoner via javascript sånn at når knappen klikkes dukker scriptet opp-->
    <div id="buttonBox">
        <div id="buttonHelse" class="button"> <button onclick="helseCords()">Helse</button> </div>
        <div id="buttonEvent" class="button"><button onclick="eventCords()">Event</button></div>
        <div id="buttonMat" class="button"><button onclick="matCords()">Mat</button></div>
        <div id="buttonTransport" class="button"><button onclick="transportCords()">Transport</button></div>
        <div id="buttonBolig" class="button"><button onclick="boligCords()">Bolig</button></div>
    </div>
    <div id="map">

        <script>
            var map;
            var myLatLng ={lat: 59.923321,lng: 10.752427};
            <!--Her opprettes Array hvor alle kordinatene blir hentet fra-->
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
                ['Blå',59.920144, 10.752756,21]
            ]

            var transportcords = [
                ['Maridalsveien 23',59.924456, 10.750547,22],
                ['Maridalsveien 23',59.912793, 10.759925,23]
            ]

            var boligcords = [
                ['anker',59.917535, 10.755437,22],
                [' Blindern Studenterhjem',59.940924, 10.719201,23]
            ]

            //Her opprettes google map kartet
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    zoom: 14
                });

                var marker,i;
                //Event listener som tar i mot function som gjør at onclick knappen
                document.getElementById("buttonHelse").addEventListener("click", matCords);
                document.getElementById("buttonMat").addEventListener("click", helseCords);
                document.getElementById("buttonEvent").addEventListener("click", eventCords);
                document.getElementById("buttonTransport").addEventListener("click", transportCords);
                document.getElementById("buttonBolig").addEventListener("click", boligCords);


                //function'ene setter marker på map og itererer igjennom arrayene.
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
                function transportCords() {
                    initMap();
                    for (i = 0; i < transportcords.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(transportcords[i][1], transportcords[i][2]),
                            map: map,
                            label: { text: 'E' },
                            visible: true
                        })
                    }
                }
                function boligCords() {
                    initMap();
                    for (i = 0; i < boligcords.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(boligcords[i][1], boligcords[i][2]),
                            map: map,
                            label: { text: 'B' },
                            visible: true
                        })
                    }
                }
            }

        </script>
        <!--google map api settes-->
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvFzSBmeyXX-eBNAu-5hRcpXv2eH-clzc &callback=initMap">
        </script>
    </div>


   </div> <!-- Container avsluttes -->


<?php include 'footer.php';?>

</body>
</html>