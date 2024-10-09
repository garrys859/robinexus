<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
        <link rel="stylesheet" href="../Form1.css">
<?php
    $x = $_POST["numbern1"];
    $o = $_POST["operacion"];
    $y = 1;

switch ($o) {

  case "suma":
    while ($y <= 10) {
        echo "$x + $y = ". $x+$y . "<br>";
        $y++;
    }
    break;

  case "resta":
    while ($y <= 10) {
        echo "$x - $y = ". $x-$y . "<br>";
        $y++;
    }
    break;

  case "dividir":
    while ($y <= 10) {
        echo "$x / $y = ". $x/$y . "<br>";
        $y++;
    }
    break;

  case "multiplicar":
    while ($y <= 10) {
        echo "$x x $y = ". $x*$y . "<br>";
        $y++;
    }   
    break;

  default:
        echo "Por favor, elija un numero";
}
?> 
    <div>
    <a href= "../PRACTICA/PRACTICA.html" class="bot">Volver</a>
</div>

    </body>
</html>
