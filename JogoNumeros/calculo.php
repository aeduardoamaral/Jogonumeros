<?php

include "chamadobd.php";

  if ($chute == $numero)
      {
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;formwinner.php'>";
      };

  if ($chute != $numero && $ultimo_id2<6)
      {
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;formburro.php'>";      
      };    
  
  if ($ultimo_id2==5) 
      {
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;formmuiburro.php'>";
      };

?>