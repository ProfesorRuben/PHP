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
    $phpVariable = "Variable enviada";
    ?>
   <form action="EjemploVariableRecibidaPorGet.php" method="get">
    <input type="hidden" name="phpVariable" value="<?=$phpVariable?>">
        <input type="submit" value="Envío de variable">
    </form>
</body>

</html>