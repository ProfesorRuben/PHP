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
    $temp = array(16, 15, 17, 15, 16);
    $s = serialize($temp);
    echo $s;
    //echo "<br>Tamaño array: ",count($s);
    $s=$s." holaquetal";
    echo "<br>",$s;

    echo "<br>Tamaño array: ",count($temp);
    echo "<br>",$temp,"<br>";
    foreach ($temp as $elemento) {
        echo $elemento, "<br>";
        }

        $valor=in_array(17, $temp);
        $valor2=in_array(88, $temp);

        echo "<br>Valor 17: ",$valor,"<br>Valor 88: ",$valor2;

        if (in_array(17,$temp, true)) {
            echo "Se encontró el valor 17\n";
        }

        if (!in_array(88,$temp, true)) {
            echo "No se encontró el valor 88\n";
        }
    ?>
</body>
</html>