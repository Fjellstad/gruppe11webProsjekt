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
    <meta name="author" content="Andreas Kristoffer Fjellstad"> <!-- Author -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/events.css" type="text/css" rel="stylesheet">

    <title>Events - Westerdals</title>

</head>

    <body>
    <div>
    <div id="container">

        <?php include 'header.php';?>
    </div>




    <div id="eventbox">
        <div id="welcomeWrapper">
            <h1 id="welcomeWrapperTit">Eventer</h1>
            <h2 id="welcomeInfo">Oslo har mye morro å by på.
                <br>På denne siden kan du finne eventer som engasjerer deg.</h2>
        </div>

        <div id="eventTits">

        </div>

        <?php

        $availableIds = array();
        $events = array();
        if ($stmt = $conn->prepare("SELECT id, starts_at, name FROM events ORDER BY starts_at ASC ")) {
            $stmt->execute();
            $stmt->bind_result($id, $starts_at, $name);
            while ($stmt->fetch()) {
                $event = array();
                $event['id'] = $id;
                $event['starts_at'] = $starts_at;
                $event['name'] = $name;
                array_push($availableIds, $id);
                array_push($events, $event);
            }
            $stmt->close();
        }

        $selectedId = 0;
        if(isset($_GET['selected'])){
            if(in_array($_GET['selected'], $availableIds)){
                if ($stmt = $conn->prepare("SELECT e.beautifultime, p.website, e.id, e.name, e.image_url, e.description, p.name, p.adresse, p.maplink FROM events e JOIN place p on e.place_id = p.id WHERE e.id = ? ")) {
                    $stmt->bind_param("i", $_GET['selected']);
                    $stmt->execute();
                    $stmt->bind_result( $selectedTime, $selectedLink, $selectedId, $selectedName, $selectedPic, $selectedDescription, $selectedPlaceName, $selectedAdresse, $selectedMaplink);
                    $stmt->fetch();
                    $stmt->close();
                }
            }
        }
        $conn->close();

        ?>




        <div id="eventMain">
            <?php
            if(!in_array($selectedId, $availableIds)) {
                foreach ($events as $event) {
                    ?>


                    <a href="?selected=<?php echo $event['id']; ?>"><div class="eventinfo">
                            <h1>
                                <?php
                                echo nl2br($event['name'])
                                ?>
                            </h1>

                            <p>
                                <?php
                                $aDateTime = "YYYY-MM-DD HH:MI:SS";

                                echo nl2br("Dato: ". timeFormatter($event['starts_at'], "date") ."\n");

                                echo nl2br("Klokkeslett: ". timeFormatter($event['starts_at'], "time"));
                                ?>
                            </p>
                        </div>
                    </a>
                    <?php
                }
            }
            if(in_array($selectedId, $availableIds)){
                ?>
                <div class="testing">
                    <img id="eventBilde" src="<?php echo $selectedPic ?>">
                    <div class="infotxt">
                        <h2 id="hva"><b>Hva?</b></h2>
                        <h2><?php echo $selectedName; ?></h2>
                        <p class="pTitle"><b>Hvor og når?</b></p>
                        <p><?php echo nl2br($selectedTime."\n".$selectedPlaceName."\n".$selectedAdresse); ?></p>
                        <P class="pTitle"><b>Kort Forklart:</b></P>
                        <p><?php echo $selectedDescription; ?></p>
                        <a href="<?php
                        $link = $selectedLink;
                        echo $link;
                        ?>">
                        <p><?php echo $selectedLink ?></p>
                        </a>

                        <!-- <p class="pTitle" ><a href="events.php">Tilbake</a></p> -->
                        <a href="events.php"><img id="backArrow" src="bilder/backArrowWhite.png"></a>
                        <div id="map">
                            <?php echo $selectedMaplink ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            <!-- </form>  -->
        </div>

    </div>
</div>
<script>
    function run (){

        var div = document.createElement("div");  //create new div
        div.addEventListener("click", run);       //bind click to new div
        this.appendChild(div);                    //append the new div to clicked div
        this.removeEventListener("click", run);   //remove the original click event

    }
    document.getElementById("start").addEventListener("click", run);
</script>


<?php
function timeFormatter($dateTime, $requestedValue){
    $values = explode(" ", $dateTime);
    $date = $values[0];
    $time = $values[1];
    if($requestedValue == "date"){
        return $date;
    }elseif($requestedValue == "time"){
        return $time;
    }
}

/*if(in_array($selectedId, $availableIds)){
    ?>
    <div class="testing">
        <h3><?php echo $selectedName; ?></h3>
        <p><?php echo $selectedPlaceName; ?></p>
        <p><?php echo $selectedDescription; ?></p>
        <p><a href="">close</a></p>
    </div>
    <?php
}*/
?>

<div id="eventCriteradd">




</div>



</div>
<?php
include 'footer.php';
?>



</body>
</html>