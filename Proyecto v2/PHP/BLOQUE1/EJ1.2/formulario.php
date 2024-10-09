<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
        <link rel="stylesheet" href="../Form1.css">
<?php
    $numbern1 = $_POST["numbern1"];
    $numbern2 = $_POST["numbern2"];
    echo "La suma de los dos números (" . $numbern1 . " y " . $numbern2 . ")" . " es " . ($numbern1+$numbern2);
    echo "<br>La multiplicación de los dos números (" . $numbern1 . " y " . $numbern2 . ")" . " es " . ($numbern1*$numbern2);
    echo "<br>La divisón de los dos números (" . $numbern1 . " y " . $numbern2 . ")" . " es " . ($numbern1/$numbern2);
?> 
    <div>
    <a href= "../EJ1.2/index.html" class="bot">Volver</a>
</div>

    </body>
</html>
