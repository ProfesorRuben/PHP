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
    /* $estructura1 = array(16, 15, 17, 15, 16); */
    ?>
    <form action="RepasoGet2.php" method="get">
        <input type="text" name="estructura1">
        <input type="hidden" name="array[]" value="1"/>
        <input type="submit" value="Envío de variable">
    </form>
</body>

</html>