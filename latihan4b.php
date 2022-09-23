<?php

$ASEANAWAL = ["indonesia","singapura","malaysia","brunei","thailand","laos","filipina","myanmar"];


?>
<html>
    <head>
        <title>latihan 4b</title>
    </head>
    <body>
        <h2>Daftar Negara ASEAN Awal :</h2>
        <?php
        for ($i=0; $i < 5; $i++) { 
            echo "<li>$ASEANAWAL[$i]</li>";
        }
        ?>
         <h2>Daftar Negara ASEAN Baru :</h2>
        <?php
        for ($j=0; $j < 8; $j++) { 
            echo "<li>$ASEANAWAL[$j]</li>";
        }
        ?>
    </body>
</html>
