<style>
    /* Css som styler footer og setter den til fixed */
    #footer{
        position: fixed;
        height: 40px;
        width: 100%;
        background-color: rgb(42, 42, 42);
        bottom: 0px;
        box-shadow: 0px 1px 8px 2px #1f1f1f;
    }
    
    /* Div for alt som ligger inne i footeren */
    #footerContent{
        position: absolute;
        width: 1170px;
        left: 0;
        right: 0;
        margin: 0 auto;
        height: 40px;
        bottom: 0;
        color: white;
        font-size: 0.8em;
        font-family: sans-serif;
    }
    
    /* Css for footerlogoen */
    #footerLogo{
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
        height: 25px;
    }
    /* Css for telefontekst */
    #footerTelefon{
        position: absolute;
        left: 250px;
    }
    /* Css for emailtekst */
    #footerEmail{
        position: absolute;
        right: 200px;

    }
    

    




</style>


<!-- Footer -->
<div id="footer">
    <div id="footerContent">
        <p id=footerTelefon>Telefon: 22 05 75 50</p>
        <a href="forside.php"><img id="footerLogo" src="bilder/wlogologo.png"></a>
        <p id="footerEmail">Email: post@westerdals.no</p>
    

        </div>
</div>

