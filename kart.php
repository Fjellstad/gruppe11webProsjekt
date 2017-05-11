<?php
include ("search.php");
include ("JSvariabler.php");






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
<script>

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
<script>
function test() {
var user = "<?php echo $user;?>"
alert("welcome " + user)
}
window.addEventListener('load', test);
</script>
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