<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
        <link rel="stylesheet" href="../Form1.css">
<?php

$num1 = $_POST["numbern1"];
$num2 = $_POST["numbern2"];

    for ($y= $num1; $y <= $num2; $y++) {

        for ($o=1; $o<= 10; $o++) {

          echo "$y x $o = ". $y*$o . "<br>";

        }
        echo "<br>";
      }
?> 
    <div>
    <a href= "../EJ2.6.2/index.html" class="bot">Volver</a>
</div>

    </body>
</html>
