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
            <a href="www.facebook.com"><img id="facebook" src="bilder/facebook.png"></a>
            <a href="www.twitter.com"><img id="twitter" src="bilder/twitter.png"></a>
            <a href="www.instagram.com"><img id="instagram" src="bilder/instagram.png"></a>
            <div id="menu" class="menuText">
                <a href="boligproject.html"><p id="bolig">Bolig</p> </a>
                <a href="kart.php"><p id="kart">Kart</p> </a>
                <a href="transport.html"><p id="transport">Transport</p> </a>
                <a href="index.html"><p id="mat">Mat og drikke</p> </a>
                <a href="helse.html"><p id="helse">Helse</p> </a>
                <a href="events.html"><p id="eventer">Eventer</p> </a>
            </div>
            <div id="headerLogo">
                <a href="index.html"><img id="wLogo" src="bilder/Logo150px.png"></a>
                   </div>
            
            
            
            
    
        </div>
        
    <div id="eventbox">
        
        <div id="eventTits">
            <p id="tid">Tid</p>
            <p id="tittel">Tittel</p>
            <p id="gratis">Gratis</p>
        </div>
        
        
        <div id="eventMain">
            <?php 
            $sql = "SELECT name, starts_at, is_free FROM events ORDER BY starts_at";
            $result = mysqli_query($connection,$sql);
            
            if(mysqli_num_rows($results) > 0){
                while($row = mysqli_fetch_row($result)){
                        foreach($result as $results) {
            
               
            
                echo $row['starts_at']." ". $row['name']." ". $row['is_free']; 
                
                
                } } }
            
            mysqli_close($connection);
            ?>
        
        </div>
        
        <div id="eventCritera">
        
        </div>
    </div>
    
    
    
    <div id="footer"></div>
</div>

</body>
</html>