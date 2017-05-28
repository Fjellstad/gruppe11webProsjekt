<style>
    
/* Header */
#header{
    position: relative;
    height: 200px;
    width: 100%;
    background-color: rgb(42, 42, 42);
    top: 0;
    box-shadow: 0 2px 17px 2px #141414;
}
/* Logo */
#vulkanLogo{
    position: absolute;
    width: 150px;
    height: 150px;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 0;
}
/* Menyen */
.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: inline-block;
    text-align: center;
}

.navbar li {
    margin-top: 80px;
    margin-left: 20px;
    margin-right: 20px;
    /*border-bottom: solid thin #ffd066;*/
}

.navbar li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    border-bottom: solid thin #ffd066;
}

.navbar {
    width: 1270px;
    margin: 0 auto;
    font-family: sans-serif;
}

.nav-middle {
    width: 230px;
}

.nav-right{
    float: right;
    margin-top: 100px;
    width: 520px;
} 

.nav-right li {
    float: left;
}

.nav-left {
    float: left;
    width: 520px;
}

.nav-left li {
    float: right;
}

/* Trigger - gjør logoen større ved hover */
#vulkanLogoDiv:hover #vulkanLogo{
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
    width: 180px;
    height: 180px;
    transition: all 0.1s linear 0s;
    }
</style>

<div id="header">
    <div class="navbar">
        <ul class="nav-left">
            <li id="liTrans">  <a href="transport.php">Transport</a></li>
            <li id="liKart">  <a href="kart.php">Kart</a></li>
            <li id="liBolig">  <a href="boligproject.php">Bolig</a></li>
        </ul>        <ul class="nav-middle">
            
        <a href="index.php">
            <div id="vulkanLogoDiv">
                <img id="vulkanLogo" src="bilder/Logo150px.png">
            </div>
        </a>
            
        </ul>
        <ul class="nav-right">
            <li id="liMat">  <a href="matogdrikke.php">Mat og drikke</a></li>
            <li id="liHelse">  <a href="Helse.php">Helse</a></li>
            <li id="liEvent">  <a href="events.php">Eventer</a></li>
        </ul>

    </div>
</div>