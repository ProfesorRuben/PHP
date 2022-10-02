<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php 
    if (isset($_POST['n'])) {
        $contadorNumeros = $_POST['contadorNumeros'];
        $numeroTexto = $_POST['numeroTexto'] . " " . $_POST['n'];
    } else {
        $contadorNumeros = 0;
        $numeroTexto = "";
    }
    // Muestra los números introducidos 
    if ($contadorNumeros == 6) {
        $numeroTexto = substr($numeroTexto, 1);
        // quita el primer espacio 
        $numero = explode(" ", $numeroTexto);
        echo "Los números introducidos son: ";
        foreach ($numero as $n) {
            echo $n, " ";
        }
    } else {
         ?>
        <form action="#" method="post"> Introduzca un número:
             <input type="number" name="n" autofocus> 
             <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>"> 
             <input type="hidden" name="numeroTexto" value="<?= $numeroTexto ?>"> 
             <input type="submit" value="OK"> </form> 
             <?php } ?>
</body>

</html>