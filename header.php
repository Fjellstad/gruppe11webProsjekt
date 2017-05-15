<style>
    #header{
        position: relative;
        height: 200px;
        width: 100%;
        background-color: rgb(42, 42, 42);
        top: 0px;
        box-shadow: 0px 1px 8px 2px #1f1f1f;
    }
    #headerLogo{
        position: absolute;
        height: 150px;
        width: 150px;
        left: 0;
        right: 0;
        margin: 0 auto;
        top: 0;
    }

    #menu{
        position: absolute;
        width: 1200px;
        height: 50px;
        top: 75px;
        left: 0;
        right: 0;
        margin: 0 auto;
    }

    p, .menuText{
        color: #FFF;
        font-family: sans-serif;
    }

    #bolig{
        position: absolute;
        left: 125px;
    }

    #kart{
        position: absolute;
        left: 250px;

        width: 300px;
        height: 200px;
    }

    #transport{
        position: absolute;
        left: 375px;
    }

    #eventer{
        position: absolute;
        right: 125px;
    }

    #helse{
        position: absolute;
        right: 260px;
    }
    #mat{
        position: absolute;
        right: 375px;
    }

    /* Linker/bilder til sosiale medier */
    #facebook{
        position: absolute;
        top: 15px;
        right: 50px;
        height: 25px;
        width: 25px;
    }

    #instagram{
        position: absolute;
        top: 15px;
        right: 105px;
        height: 25px;
        width: 25px;
    }

    #twitter{
        position: absolute;
        top: 11px;
        right: 150px;
        height: 32px;
        width: 32px;
    }

</style>


<div id="header">
    <div id="headerLogo">
        <a href="index.html"><img id="headerLogo" src="bilder/Logo150px.png"></a>
    </div>
    <a href="https://www.facebook.com"><img id="facebook" src="bilder/facebook.png"></a>
    <a href="https://www.twitter.com"><img id="twitter" src="bilder/twitter.png"></a>
    <a href="https://www.instagram.com"><img id="instagram" src="bilder/instagram.png"></a>
    <div id="menu" class="menuText">
        <a href="www.vg.no"><p id="bolig">Bolig</p></a>
        <a href="www.facebook.no"><p id="kart">Kart</p></a>
        <a href="www.vg.no"><p id="transport">Transport</p></a>
        <a href="www.vg.no"><p id="mat">Mat og drikke</p></a>
        <a href="www.vg.no"><p id="helse">Helse</p></a>
        <a href="www.vg.no"><p id="eventer">Eventer</p></a>
    </div>
</div>