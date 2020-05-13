<?php

include "conxbd.inc";

$chute=$_POST["num"];

//echo "$chute :   Chute</br>";


$sql2="INSERT INTO jog_n2 VALUES (NULL, '$chute')";

$res2=mysqli_query ($con,$sql2);

mysqli_close($con);

//echo "Entrada de dados ok";
 
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;calculo.php'>";
?>