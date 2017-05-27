<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Vilde Martine Ersdal"> <!-- Author -->
        <link href="css/forside.css" type="text/css" rel="stylesheet">
        <title>Forside - Westerdals</title>

    </head>
<body>
<?php include 'header.php';?>

    <div id="backgroundBox"> <!-- BACKGROUNDBOX START -->
        
        
        
        </div> <!-- BACKGROUNDBOX END -->


    <div id="container"> <!-- CONTAINER START -->
        
        <div id="welcomeWrapper"> <!-- WELCOMEWRAPPER START-->
            <h1>VELKOMMEN TIL CAMPUS VULKAN</h1>
                <h2 id="welcomeInfo">Livet rundt Campus Vulkan er enestående.
            <br>På denne siden vil du finne det du trenger for å bli kjent med nærområdet.</h2>  
        </div>
            
        <div id="houseDiv" class="iconBox"> <!-- HOUSEDIV START -->
            <a href="boligproject.php">
            <img id="houseIcon" class="icons" src="bilder/hus.png">
            <p class="txt">Alt innen bolig</p>
            </a>
        </div> 
        
        <div id="mapDiv" class="iconBox"> <!-- MAPDIV START -->
            <a href="kart.php">
            <img id="mapIcon" class="icons" src="bilder/kart.png">
            <p class="txt">Ligger i sentrum</p>
            </a>
        </div> 
        
        <div id="transportDiv" class="iconBox"> <!-- TRANSPORTDIV START -->
            <a href="transport.php">
                <img id="transportIcon" class="icons" src="bilder/transport.png">
            <p class="txt">Kort vei til bussen</p>
            </a>
        </div> 
        
        <div id="matDiv" class="iconBox"> <!-- MATDIV START -->
            <a href="matogdrikke.php">
            <img id="matIcon" class="icons" src="bilder/mat.png">
            <p class="txt">Godt utvalg av mat</p>
            </a>
        </div> 
        
        <div id="helseDiv" class="iconBox"> <!-- HELSEDIV START -->
            <a href="Helse.php">
            <img id="helseIcon" class="icons" src="bilder/helse.png">
            <p class="txt">Tren etter skolen</p>
            </a>
        </div>
        
        <div id="eventDiv" class="iconBox"> <!-- EVENTDIV START -->
            <a href="events.php">
            <img id="eventIcon" class="icons" src="bilder/event.png">
            <p class="txt">Bli med på livet</p>
            </a>
        </div>


    </div> <!-- CONTAINER END -->



<?php include 'footer.php';?>


</body>
</html>