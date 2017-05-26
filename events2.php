<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/events2.css" type="text/css" rel="stylesheet">

    <title>Events</title>

</head>
<body>

<div id="container">

    <?php include 'header.php';?>
</div>


<div id="eventbox">

    <div id="eventTits">
        <h1>Events</h1>
    </div>

            <?php
            $cunt = $_GET['sqlName'];
            $sql1 = ("SELECT events.name as navn, events.starts_at, events.description, events.place_id, place.id, place.name FROM events JOIN place ON events.place_id=place.id ORDER BY events.starts_at ASC ");

            $statement = $connection->prepare($sql1);

            $statement->execute();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){

                $event[] = $row;
            }
            ?>




    <div id="eventMain">
        <div class="eventMainBoxSize eventPos1">

                <?php

                foreach ($event as $item)
                {
                    ?>
                    <input type="checkbox" id="btnControl"/>
                    <label class="btn" for="btnControl">
                    <div class="eventinfo">



        <p>
                <?php
                    echo nl2br($item['starts_at']."\n".$item['navn']."\n".$item['name']."\n".$item['description']);
                    ?>
        </p>


                </div>
                    </label>
            <?php
                    }

                ?>


        </div>
    </div>
<script>
    function run (){

        var div = document.createElement("div");  //create new div
        div.setAttribute("id","div1"); //set id
    }
    document.getElementsByClassName("eventinfo").addEventListener("click", run);
</script>




    </div>

    <div id="eventCriteradd">




    </div>
</div>



<?php
include 'footer.php';
?>

>
</div>

</body>
</html>