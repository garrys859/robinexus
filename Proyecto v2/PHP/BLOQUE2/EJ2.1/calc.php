<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="cuerpo">
        <h1>Ejercicio 2.1</h1>
        <?php
        $num1 = (int)$_POST['num1'];
        if (($num1 % 2) == 0) {
            echo "$num1 es par";
        }
        else {
            echo "$num1 es impar";
        }

        ?>
    </div>
    <div>
        <a href="calc.html" class="btn btn-success">Volver</a>
    </div>    
</body>
</html>
