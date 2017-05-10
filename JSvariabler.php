<?php
/**
 * Created by PhpStorm.
 * User: Mads-power
 * Date: 04.05.2017
 * Time: 16.05
 */
?>
<script>
    //sender til kart.php filen
    (function (window,google) {

    //skal lage en listener for click knapper
    google.maps.event.addListener(map.gMap,'click', function (e) {
        alert('')
    })

   //fun
   var clicked = (function type(){
        function clicked() {



        document . getElementById("buttonBolig");
        document . getElementById("buttonTransport");
        document . getElementById("buttonMat");
        document . getElementById("buttonHelse");
        document . getElementById("buttonEvent");
        }
        return clicked();
   }());

    clicked.create = function () {
        return new clicked();
    };

    }(window, window.kart))
</script>
