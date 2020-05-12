<?php

include "conxbd.inc";

$nvezes=$_POST["nf"];

echo "$nvezes numero de vezes</br>";

$r = rand( 1 , $nvezes );
    
echo"$r </br> numero sorteado";

$sql="INSERT INTO jog_n VALUES (NULL, '$r')";

$res=mysqli_query ($con,$sql);

mysqli_close($con);

echo "Entrada de dados ok";
 
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;form2.php'>";
?>