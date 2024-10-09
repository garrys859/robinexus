<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
        <link rel="stylesheet" href="../Form1.css">
<?php
    $x = $_POST["numbern1"];
    $z = $_POST["numbern2"];
    $o = $_POST["operacion"];

    for ($y = 1; $y <= $z; $y++) {

switch ($o) {

  case "suma":
        echo "$x + $y = ". $x+$y . "<br>";
            break;

  case "resta":
        echo "$x - $y = ". $x-$y . "<br>";
            break;

  case "dividir":
    if ($z == 0) {
        echo "<br>El número no es divisible";
}

      else {
        echo "$x / $y = ". $x/$y . "<br>";
      }
            break;

  case "multiplicar":
        echo "$x*$y = ". $x*$y . "<br>";
            break;

  default:
        echo "Por favor, elija un numero";
 }

}
?> 
    <div>
    <a href= "../EJ2.5/index.html" class="bot">Volver</a>
</div>

    </body>
</html>
