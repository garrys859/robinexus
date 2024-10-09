<!DOCTYPE html>
<html>
    <body>
        <h2> Resultado</h2>
<?php
    $color = $_POST["color"];
    echo "
    <style>
       body {
            background-color:$color;
        }
    </style>"
?> 
    <div>
    <a href= "../EJ1.3/index.html" class="bot">Volver</a>
</div>

    </body>
</html>
