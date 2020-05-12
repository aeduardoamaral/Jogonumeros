<?php
include "conxbd.inc";

$sql= "CREATE TABLE IF NOT EXISTS jog_n(
    id int AUTO_INCREMENT PRIMARY KEY,
    nvezes int(9))";
    
if (mysqli_query ($con,$sql))
    {
        echo "Banco de dados</br> criado com sucesso";
    } 
else
    {
        echo "banco de dados</br> Erro ao criar:" ; mysqli_error ($con);
    }

mysqli_close ($con)



?>