<?php
    
    include "conxbd.inc";

    // Limpa a tabela no banco de dados inclusive o id mas não exclui a tabela
    

    $sql = "TRUNCATE jog_n2 " ;
        if (mysqli_query($con, $sql)) 
        {
            //echo "Database clean success full\n";
        } 
        else 
        {
            //echo 'Error dropping database: ' . mysqli_error($con) . "\n";
        }
?>