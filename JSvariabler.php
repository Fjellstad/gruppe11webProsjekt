<?php

?>
<script>

    //sender til kart.php filen
    (function (window,google.kart) {

    //skal lage en listener for click knapper
    google.maps.event.addListener(map.gMap,'click', function (e) {
        alert('')
    })

   //fun
   var Clicked = (function type(){
                function Clicked(element, opts) {
                    this.gMap = new google.Map(element, opts);


        document.getElementById("buttonBolig");
        document . getElementById("buttonTransport");
        document . getElementById("buttonMat");
        document . getElementById("buttonHelse");
        document . getElementById("buttonEvent");
        }
        Clicked.prototype = {

        }
        return Clicked();
   }());


    Clicked.create = function () {
        return new Clicked();
    };
        window.Clicked = Clicked;
    }(window, window.kart))
</script>
