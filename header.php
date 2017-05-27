<style>
#header{
    position: relative;
    height: 200px;
    width: 100%;
    background-color: rgb(42, 42, 42);
    top: 0;
    box-shadow: 0 1px 8px 2px #1f1f1f;
}
    /*
#headerLogo{
    position: absolute;
    height: 150px;
    width: 150px;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 0;
}
*/
    
#vulkanLogo{
    position: absolute;
    width: 150px;
    height: 150px;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 0;
}
    /*
    #vulkanLogoDiv{
    position: absolute;
    height: 150px;
    background-color: #ffd066;
    width: 150px;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 0;
    z-index: 1;
}*/

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
    border-bottom: solid thin #ffd066;
}

.navbar li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: rgb(64, 64, 64);
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
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
                <li>  <a href="transport.php">Transport</a></li>
                <li>  <a href="kart.php">Kart</a></li>
                <li>  <a href="boligproject.php">Bolig</a></li>
            </ul>        <ul class="nav-middle">
            
            <a href="index.php">
                <div id="vulkanLogoDiv">
                    <img id="vulkanLogo" src="bilder/Logo150px.png">
                </div>
            </a>
            
        </ul>
        <ul class="nav-right">
            <li>  <a href="matogdrikke.php">Mat og drikke</a></li>
            <li>  <a href="Helse.php">Helse</a></li>
            <li>  <a href="events.php">Eventer</a></li>
            </ul>

        </div>
    </div>