<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado </h2>
        <link rel="stylesheet" href="../Form1.css">
<?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellidos"];
    $edad = $_POST["edad"];
    echo "Hola " . $nombre . " se que tienes " . $edad . " años y que tu apellido es " . $apellido;
?> 

<div>
    <a href= "../EJ1.1/index.html" class="bot">Volver</a>
    </body>
</html>
