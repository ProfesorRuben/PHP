<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
/* $a = new SplFixedArray(10); */
/* $a[0] = 843;
$a[1] = 11;
$a[2] = 1372;
$numeros=count($a);
echo "Hay $numeros<br>";
$aleatorio = rand(0,count($a));
unset($a[$aleatorio]);
// Los valores del array que no se han inicializado son NULL
foreach ($a as $elemento) {
echo $elemento;
echo "<br>";
} */

$a = array();
$a[0] = 843;
echo count($a),"<br>";
unset($a[0]);

echo count($a);


?>
</body>
</html>