<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $estructura1 = array(16, 15, 17, 15, 16);
    $s = serialize($estructura1);
    
    echo "String recogido del array haciendo cambio de tipos a partir
    de serialize: ",$s,"<br><br>";

    $estructura2 = [];
    
    $estructura2=unserialize($s);   
    echo "Array recogido del String haciendo cambio de tipos a partir
    de unserialize:","<br>";
    foreach ($estructura2 as $elemento) {
        echo $elemento, "<br>";
        }

    $palabra="P r ograma cion";

    $estructura3 = [];

    $estructura3= explode(" ",$palabra);

    echo "<br>","Texto separado por cada ‘espacio’ encontrado y lo almacena en el 
    array a partir de explode:","<br>";
    foreach ($estructura3 as $elemento) {
        echo $elemento, "<br>";
        }

    $palabra = implode(" ",$estructura3);

    echo "<br>","Texto unido por cada ‘espacio’ encontrado y lo almacena en una 
    variable a partir de implode:","<br>";
    echo $palabra;
    ?>
</body>
</html>