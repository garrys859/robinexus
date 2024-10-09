<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
        <link rel="stylesheet" href="../Form1.css">
<?php
    $numbern1 = $_POST["numbern1"];
    $numbern2 = $_POST["numbern2"];
    $ope = $_POST["operacion"];

switch ($ope) {
  case "suma":
    echo "El resultado es " . ($numbern1+$numbern2);
    break;
  case "resta":
    echo "El resultado es " . ($numbern1-$numbern2);
    break;
  case "dividir":
    if ($numbern2 == 0) {
      echo "<br>El número no es divisible";
      }
      else {
          echo "<br>El número es divisible, el resultado es " . ($numbern1 /$numbern2);
      }
    break;
  case "multiplicar":
        echo "El resultado es " . ($numbern1*$numbern2);
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?> 
    <div>
    <a href= "../EJ2.3/index.html" class="bot">Volver</a>
</div>

    </body>
</html>
