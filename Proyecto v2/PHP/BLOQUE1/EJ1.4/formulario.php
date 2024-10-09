<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado </h2>
        <link rel="stylesheet" href="../Form1.css">
<?php
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sueldo = $_POST["sueldo"];
    $ipc = $_POST["ipc"];
    echo "Hola " . $nombre . ", tienes " . $edad . " años" . "</br>";
    echo "Tu sueldo es de " . $sueldo . "€" . "</br>";
    echo "El IPC es de " . $ipc . "%" . "</br>";
    echo "Tu salario es de " . ($sueldo+($sueldo*($ipc/100))) . "€";
?> 

<div>
    <a href= "../EJ1.4/index.html" class="bot">Volver</a>
    </body>
</html>
