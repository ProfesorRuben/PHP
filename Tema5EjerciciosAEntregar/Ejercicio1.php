<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1 tema4</title>
</head>
<body>
<h1>Pulsa un ojo para abrirlo</h1>
<!-- Diseñar una página que esté compuesta por una tabla de 10 filas por 10 columnas, y en cada celda habrá 
una imagen de un ojo cerrado. Cada vez que el usuario pulse un ojo, ser recargará la página con todos 
los ojos cerrados salvo los que se han ido pulsando que corresponderá a un ojo abierto. Conforme se vayan
pulsando más ojos se irá completando la tabla de ojos abiertos. Si se pulsa en un ojo abierto se volverá 
a cerrar. Usar la función explode() para pasar arrays como cadenas. -->
<table border=1 cellspacing=0>
    <?php
    if (isset($_REQUEST['seleccion'])) {
        $sel=$_REQUEST['seleccion'];
        
        echo "Los números introducidos son (Usando la función REQUEST): ",$sel,"<br>";
        

        $ojos=explode(',',$_REQUEST['ojos']);
        
        echo"<br>Función explode:<br>";
        foreach ($ojos as $n) {
            echo $n, " ";
        }


        $ojos[$sel]=($ojos[$sel]==0)?1:0;   
    }else {
        $ojos=array_fill(0,100,0);
    }
    $cadena=implode(',',$ojos);

    echo "<br><br>Los números introducidos son (Usando la función implode): <br>",$cadena;
   

        
    $n=0; 
    for ($i=0; $i < 10; $i++) {
        echo "<tr>";
        for ($j=0; $j < 10; $j++) {
            echo "<td><a href='Ejercicio1.php?seleccion=$n&ojos=$cadena'><img width='70' height='70' src='../imagenestema5/ojo".
            (($ojos[$n]==1)?"abierto":"cerrado").".png'></td>";
            $n++;
        }
        echo "</tr>";
    } 
    ?>
</table>
</body>
</html>