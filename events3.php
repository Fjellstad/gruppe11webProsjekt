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

            <?php
			//vet ikke hva dere ville med "$cunt = $_GET['sqlName'];"
			
			//FORKLARING  -->  Første spørringen som altid kjører henter liste over events med id, start tid og navn.
			//så fyller jeg inn mulige IDer i en array.
			
			
			
			
			$availableIds = array();
			$events = array();
			if ($stmt = $conn->prepare("SELECT id, starts_at, name FROM events ORDER BY starts_at ASC ")) {
				//$stmt->bind_param("s", $string); kan sette inn ? i query så settes $string variabel inn (tryggere database spørring med variabler)
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
			//FORKLARING  -->  Her sjekker man om vi har fått en "selected" get variabel ("?selected=2" på slutten av linken)
			if(isset($_GET['selected'])){
				//FORKLARING --> Hvis "selected" variablen er et tall som finnes i listen av mulige IDer så kjøres denne spørringen for å hente event med riktig id (la bare til description)
				if(in_array($_GET['selected'], $availableIds)){
					if ($stmt = $conn->prepare("SELECT * FROM events WHERE id = ? ")) {
						$stmt->bind_param("i", $_GET['selected']); 
						$stmt->execute();
						//på bind result velg hvilken variabel som skal oppdateres  i samme rekkefølge som resultatet kommer fra sql
						$stmt->bind_result($selectedId, $selectedStarts_at, $selectedName, $selectedDescription);
						$stmt->fetch();
						$stmt->close();
					}
				}
			}
			
			$conn->close();
			
            ?>




    <div id="eventMain">
		
        <div class="eventMainBoxSize eventPos1" id="box2" <!--onclick="run(this)" {}"   --> >
			<!-- FORKLARING: Legger til get variabler når man trykker på eventet   Siden åpnes på nytt, men denne gangen med variabler i url
			<!-- En litt mer standard måte å sende en get variabel er å gjøre det via en FORM,
			men for å gjøre det lettvint(med tanke på stilsetting) lager jeg heller bare en link med get verdiene på innsiden av <p> området du hadde laget per event-->
            <!--<form action="events2.php" method="get">  <button name="selected" type="submit" value="1">event nr 1</button>-->
                <?php

                foreach ($events as $event)
                {
                ?>
                <div class="eventinfo">
					<p><a href="?selected=<?php echo $event['id']; ?>">
					<?php
						echo nl2br($event['starts_at']."\n".$event['name']."\n");
                    ?>
					</a></p>
                </div>
				<?php
                }

                ?>

            <!-- </form>  -->
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





	<!-- Er det her mer detaljert info skulle komme?? -->
	<!-- FORKLARING: Dersom selected id finnes i listen over gyldige IDer så lag denne DIV med mer info -->
	<?php
	
		if(in_array($selectedId, $availableIds)){
			?>
			<div>
				<h3><?php echo $selectedName; ?></h3>
				<p><?php echo $selectedStarts_at; ?></p>
				<p><?php echo $selectedDescription; ?></p>
			</div>
			<?php
		}
	?>
	
    <div id="eventCriteradd">




    </div>




<?php
include 'footer.php';
?>



</body>
</html>