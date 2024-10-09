<!DOCTYPE html>
<html>
    <body>
        <h2> Ejercicio LOGIN</h2>
        <link rel="stylesheet" href="../Form1.css">
<?php

$usuario = $_POST["usu"];
$password = $_POST["pass"];

if ($usuario== "robin" and $password== "1234") {
  header("location: resultado.html");
  } 
    elseif ($usuario !="robin") {
    echo "El usuario es incorrecto" . "<br>";
    }

  elseif ($password != "1234") {
    echo "La contraseña es incorrecta" . "<br>";
    } 
?> 
    <div>
    <a href= "../LOGIN/login.html" class="bot">Volver</a>
</div>

    </body>
</html>
