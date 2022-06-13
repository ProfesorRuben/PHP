<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="brown">

<img src="../Tema3/cilindro.png">


<?php 
/* EJERCICIO Nº 1: Diseñar un formulario web que pida la altura y el diámetro de un 
cilindro. Una vez el usuario introduzca los datos y pulse el botón calcular, deberá 
calcularse el volumen del cilindro y mostrarse el resultado en el navegador. 
Mostrar la imagen de un cilindro junto al resultado y un título "Calculo del 
volúmen de un cilindro", intenta dar un aspecto agradable a la página de resultado.

Volumen de un cilindro. v = π x r2 x h, donde h es la altura del cilindro 
y π x r2 es la superficie de la base circular 

pi(); // 3.1415926535898
M_PI; // 3.1415926535898 */

echo "Cálculo del volumen del cilindro: ";
echo pi()*$_GET['altura']*pow($_GET['diametro'], 2) ?>



</body>
</html>

