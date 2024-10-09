<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
        <link rel="stylesheet" href="../Form1.css">
<?php

    for ($y = 1;$y <= 10; $y++) {

        for ($x=1; $x <= 10; $x++) {

          echo "$y x $x = ". $y*$x . "<br>";

        }
        echo "<br>";
      }
?> 
    <div>
    <a href= "../EJ2.6/index.html" class="bot">Volver</a>
</div>

    </body>
</html>
