<?php
include "conxbd.inc";
// ---> Sorteia o numero a partir do envio do formulário para o bd 
$sql="SELECT MAX(id) as id FROM jog_n";
$sql = $con->query($sql);
$row = $sql->fetch_assoc();;
$ultimo_id = $row['id'];

$sql = "SELECT nvezes FROM jog_n WHERE id='$ultimo_id'";
$sql = $con->query($sql);
$row = $sql->fetch_assoc();;

$numero = $row['nvezes'];

//echo 'O id do ultimo registro é : </br>' .$ultimo_id;

//echo '</br>O Numero sorteado foi:  </br>'.$numero;

// ---> Chama o numero chutado pelo usuário enviado para o bd pelo formulário

$sql2="SELECT MAX(id) as id FROM jog_n2";
$sql2= $con->query($sql2);
$row2 = $sql2->fetch_assoc();;
$ultimo_id2 = $row2['id'];

$sql2 = "SELECT nvezes FROM jog_n2 WHERE id='$ultimo_id2'";
$sql2 = $con->query($sql2);
$row2 = $sql2->fetch_assoc();;

$chute = $row2['nvezes'];

//echo 'O id do ultimo registro é : </br>' .$ultimo_id2;

//echo '</br>O Numero sorteado foi:  </br>'.$chute;

mysqli_close($con);

?>