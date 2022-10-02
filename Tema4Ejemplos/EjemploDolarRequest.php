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
$_GET['foo'] = 'a';
$_POST['bar'] = 'b';

var_dump($_REQUEST); 
?>
</body>
</html>