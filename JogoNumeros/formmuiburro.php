<!DOCTYPE HTML>

<html>

    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" /> 
        <title>Imagem Frouxo</title>
<?php
include "chamadobd.php";
include "dellchute.php";
    if ($ultimo_id2>5)
    {
        echo '<h1 id="div">O numero sorteado foi.</h1>'.$numero;
    };
    

?>
    </head>

    <body id="bi">


        <img src="imag\burro.jpg" height=300px>

        <form method="post" action="form.php">
                    <input id="bt" type="submit" value="VOCÊ É MUITO BURRO MESMO!!!"/>
                </form>        
    </body>

</html>
