<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (isset($_REQUEST['num'])) {
        echo "<meta http-equiv='Refresh' content='22;url=Ejercicio1 copy.html'>";
    }
    ?>
    <title>Document</title>
</head>

<body>

    <?php
    var_dump($_REQUEST);
    $num=$_REQUEST['num'];
    if ($num==7) {
        echo '</br></br></br>',"HAS GANADO!!!!!!!!!!!";
    }
    ?>
</body>

</html>