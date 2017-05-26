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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/events.css" type="text/css" rel="stylesheet">

    <title>Events</title>

</head>
<body>

<div id="container">

    <?php include 'header.php';?>
</div>


<div id="eventbox">

    <div id="eventTits">
        <p id="tid">Tid</p>
        <p id="tittel">Tittel</p>
        <p id="gratis">Gratis</p>
    </div>
    <script>
        querys("$sql1");
        function querys(sqlName) {
            document.addEventListener("click", sqlName);

            $('.slq').click(function () {
                $.ajax({

                })
            })
            <?php
            $cunt = $_GET['sqlName'];
            $sql1 = ("SELECT * FROM events ORDER BY starts_at ASC ");
            $sql2 = ("SELECT * FROM events ORDER BY starts_at DESC");
            $sql3 = ("SELECT * FROM events ORDER BY name ASC");
            $sql4 = ("SELECT * FROM events ORDER BY name DESC");
            $sql5 = ("SELECT * FROM events WHERE is_free = 1 ORDER BY starts_at ASC");
            $sql6 = ("SELECT * FROM events WHERE is_free = 1 ORDER BY starts_at DESC");
            $sql7 = ("SELECT * FROM events WHERE is_free = 1 ORDER BY name ASC");
            $sql8 = ("SELECT * FROM events WHERE is_free = 1 ORDER BY name DESC");
            $sql9 = ("SELECT * FROM events WHERE is_free = 0 ORDER BY starts_at ASC");
            $sql10 = ("SELECT * FROM events WHERE is_free = 0 ORDER BY starts_at DESC");
            $sql11 = ("SELECT * FROM events WHERE is_free = 0 ORDER BY name ASC");
            $sql12 = ("SELECT * FROM events WHERE is_free = 0 ORDER BY name DESC");

            $res = $connection->query($sql1);

            $isItFree = "";

            $statement = $connection->prepare($sql1);

            $statement->execute();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){

                $event[] = $row;
            }
            ?>
        }


    </script>


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
        <p>Dato</p>

        <button class="slq" onclick="querys(sql1)">Asc</button>
        <button>Desc</button>
        <p>Tittel</p>
        <button>Asc</button>
        <button>Desc</button>
        <p>Gratis</p>
        <button>Ja</button>
        <button>Nei</button>
        <button>Begge</button>


    </div>
</div>



<?php
include 'footer.php';
?>

>
</div>

</body>
</html>