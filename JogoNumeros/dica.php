<html>

<head>
<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        
</head>
<body>
<?php
include "chamadobd.php";

if ($chute>$numero)
    {
        echo '<h1 id="div">O numero é menor</h1>';
    };
if ($chute<$numero)
    {
        echo '<h1 id="div">O numero é maior</h1>';
    };


?>

</body>


</html>