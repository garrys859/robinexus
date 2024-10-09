<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
        <link rel="stylesheet" href="../../Form1.css">
<?php 
    $x = $_POST["numero"];
    $y = $_POST["numer"];
    ?>
    <?php 
    for ($z= 1; $z <= $y; $z++;) {
      echo "$x*$z = ". $x*$z . "<br>";
    }
?> 
    <div>
    <a href= "../EJ2.4/index.html" class="bot">Volver</a>
</div>

    </body>
</html>
