<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mads Kolkin Sarastuen(PHP og html/css) og Vilde Martine Ersdal(tilpasset litt på html/css)"> <!-- author -->
        <link href="css/helse.css" type="text/css" rel="stylesheet">
        <title>Helse - Westerdals</title>


        
    </head>
    
<body>

<?php include 'header.php';?>


    <div id="container"> <!-- CONTAINER START -->
    
        <div id="welcomeWrapper"> <!-- WELCOMEWRAPPER START-->
            <h1>HELSE</h1>
            <h2 id="welcomeInfo">Dersom du liker å trene, trenger noe på apoteket eller noe skulle skje
            <br>ligger Campus Vulkan nær både treningssenter, apotek og lege.</h2>
        </div> <!-- WELCOMEWRAPPER -->
    
        
        <div id="apotekBox" class="contentBox"> <!-- APOTEKBOX START -->
            <h2 class="title">Apoteker</h2>
            <img class="pics" src="bilder/cross.png">

                <div id="vitus"> <!-- vitus start -->
                    <h3>Vituapotek Vulkan</h3>
                        <p>Det nærmeste apoteket fra Vulkan. Maridalsveien 21. <a href="https://www.vitusapotek.no/apotek">www.vitusapotek.no/apotek</a></p>
                </div> 
        
                <div id="lokka"> <!-- lokka start -->
                    <h3>Apotek 1 Grünerløkka</h3>
                        <p>Grüners gate 8 ligger et lite stykke unna, men fortsatt i veldig nærme.<br><a href="https://www.apotek1.no/vaare-apotek/oslo/grunerlokka-144">www.apotek1.no</a></p>
                </div>
        
                <div id="apotekLegevakt"> <!-- apotekLegevakt start -->
                    <h3>Apotek 1 Legevakten</h3>
                        <p>Apoteket som ligger ved legevakten. Se adresse  i "Legevakt"
                        <br><a href="https://www.apotek1.no/vaare-apotek/oslo/legevakten-671">www.apotek1.no</a></p>
                </div>
        </div>
        
        
        <div id="legevaktBox" class="contentBox"> <!-- LEGEVAKTBOX START-->
            <h2 class="title">Legevakt</h2>
            <img class="pics" src="bilder/pulse.png">
                <p class="contentText">Dersom du har behov for legevakt, ligger legevakten 5-10 minutter unna ved en spasertur. Den nærmeste legevaktenbefinner seg i Storgata 40 og du kan besøke siden dems <a href="https://www.oslo.kommune.no/dognapne-vakttjenester/legevakt-oslo/">her</a></p>
        </div>


        <div id="treningBox" class="contentBox"> <!-- TRENINGSBOX START -->
            <h2 class="title">Trening</h2>
            <img class="pics" src="bilder/weight.png">
        
                <div id="sio"> <!-- sio start -->
                    <h3>SiO Athletica Vulkan</h3>
                        <p>På Vulkan 15 finner du Athletica Vulkan hvor du kan ta deg en god treningsøkt etter skolen <a href="https://www.sio.no/trening/vare-treningssentre/athletica-vulkan">www.sio.no</a></p>
                </div>
        
                <div id="fitnessSeven"> <!-- fitnessSeven start -->
                    <h3>SiO Athletica Vulkan</h3>
                        <p>På Grünerløkka, Markveien 35, finner du Fitness24Seven.
                        <br><a href="https://no.fitness24seven.com/vare-sentre/her-er-vi/oslo-grunerlokka/">no.fitness24seven.com</a></p>
                </div>
        
                <div id="evo"> <!-- evo start -->
                    <h3>EVO Grünerløkka</h3>
                        <p>EVO treningssenter finner du i Thorvald Meyers gate 72.
                        <br><a href="https://evofitness.no/">www.evofitness.no</a></p>
                </div>
        
                <div id="sats"> <!-- sats start -->
                    <h3>SATS Schous plass.</h3>
                        <p>EVSATS Schous plass ligger i Trondheimsveien 2D.
                        <br><a href="https://www.satselixia.no/treningssentre/oslo/schous-plass-sats/">www.satselixia.no</a></p>
                </div>
            
        </div>

    </div> <!-- CONTAINER END -->

<?php include 'footer.php';?>


</body>
</html>