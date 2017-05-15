<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link href="css/events.css" type="text/css" rel="stylesheet">

<title>Events</title>

</head>
<body>

<div id="container">
    
        <div id="header">
            <a href="https://www.facebook.com"><img id="facebook" src="bilder/facebook.png"></a>
            <a href="https://www.twitter.com"><img id="twitter" src="bilder/twitter.png"></a>
            <a href="https://www.instagram.com"><img id="instagram" src="bilder/instagram.png"></a>
            <div id="menu" class="menuText">
                <a href="boligproject.html"><p id="bolig">Bolig</p> </a>
                <a href="kart.php"><p id="kart">Kart</p> </a>
                <a href="transport.html"><p id="transport">Transport</p> </a>
                <a href="matogdrikke.html"><p id="mat">Mat og drikke</p> </a>
                <a href="Helse.html"><p id="helse">Helse</p> </a>
                <a href="events.html"><p id="eventer">Eventer</p> </a>
            </div>
            <div id="headerLogo">
                <a href="matogdrikke.html"><img id="wLogo" src="bilder/Logo150px.png"></a>
                   </div>

        </div>
        
    <div id="eventbox">
        
        <div id="eventTits">
            <p id="tid">Tid</p>
            <p id="tittel">Tittel</p>
            <p id="gratis">Gratis</p>
        </div>

        <?php
        $sql = ("SELECT * FROM events ORDER BY starts_at");

        $res = $connection->query($sql);

        $isItFree = "";

        $statement = $connection->prepare($sql);

        $statement->execute();

        while($row = $statement->fetch(PDO::FETCH_ASSOC)){

        //printer
        //echo nl2br( $row['starts_at']." ". $row['name']." ". $isItFree."\n");
        $event[] = $row;
        }


        ?>
        
        
        <div id="eventMain">
            <div class="eventMainBoxSize eventPos1" id="box1">
                <p>
                <?php

                foreach ($event as $item)
                {
                    echo nl2br($item['starts_at']."\n");
                }

                ?>
                </p>
            </div>
            <div class="eventMainBoxSize eventPos2" id="box2">
                <p>
                <?php
                foreach ($event as $item)
                {
                    echo nl2br($item['name']."\n");
                }
                ?>
                </p>
            </div>
            <div class="eventMainBoxSize eventPos3" id="box3">
                <p>
                <?php

                foreach ($event as $item)
                {
                    if($item['is_free'] == 1) {
                        echo nl2br("Gratis"."\n");
                    } else{
                        echo nl2br("Ikke Gratis". "\n");
                    }
                }
                ?>
                </p>


            </div>


        
        </div>
        
        <div id="eventCritera">
            <p id="filter">Filter</p>
            <div>
                
            </div>
        
        </div>
    </div>
    
    
    
    <?php
    include 'footer.php';
    ?>

>
</div>

</body>
</html>