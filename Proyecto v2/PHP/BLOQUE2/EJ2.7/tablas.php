<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
        <link rel="stylesheet" href="../Form1.css">
<?php

$numcolumn = $_POST["numcolumn"];
$numfila = $_POST["numfila"];
$num = $_POST["num"];
$numincrement = $_POST["numincrement"];

    echo "El número que elegiste de filas es $numfila" . "<br>";
    echo "El número que elegiste de columnas es $numcolumn" . "<br>";
    echo "El número a generarse que elegiste es $num" . "<br>";
    echo "El número que elegiste para el incremento es $numincrement" . "<br>";

    echo "<h2> Tabla generada </h2>";

    echo "<table border= '1px' witdh='50%'";
    for ($num1=1; $num1<=$numfila; $num1++) {
            echo "<tr>";
        for ($num2=1; $num2<= $numcolumn; $num2++) {
                echo "<td> $num </td>";
                $num+=$numincrement;
        }
        echo "</tr>";
      }
      echo "</table>";
?> 
</br>
        <div>
            <a href= "../EJ2.7/tablas.html" class="bot">Volver</a>
        </div> 

        </br>
    </body>
</html>
