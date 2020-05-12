<?php 
include "conxbd.inc";
$sql="SELECT MAX(id) as id FROM jog_n";
$sql = $con->query($sql);
$row = $sql->fetch_assoc();;
$ultimo_id = $row['id'];

$sql = "SELECT nvezes FROM jog_n WHERE id='$ultimo_id'";
$sql = $con->query($sql);
$row = $sql->fetch_assoc();;

$numero = $row['nvezes'];

echo 'O id do ultimo registro é : ' .$ultimo_id;

echo '</br>Os dados do meu ultimo registro são: '.$numero;
mysqli_close($con);

?>