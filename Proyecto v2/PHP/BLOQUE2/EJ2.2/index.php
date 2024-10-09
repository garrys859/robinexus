<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
        <link rel="stylesheet" href="../Form1.css">
<?php
    $numbern1 = $_POST["numbern1"];
    $numbern2 = $_POST["numbern2"];
    if ($numbern2 == 0) {
        echo "<br>El número no es divisible";
        }
        else {
            echo "<br>El número es divisible, el resultado es " . ($numbern1 /$numbern2);
        }
?> 
    <div>
    <a href= "../EJ1.2/index.html" class="bot">Volver</a>
</div>

    </body>
</html>
