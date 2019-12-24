<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .resaltar {
            color: #F00;
            font-weight: bold;
        }

    </style>
</head>
<body>
<?php

$variable1 = "casa";
$variable2 = "CASA";
$resultado = strcmp($variable1,$variable2);
echo "El resultado es $resultado";



?>
</body>
</html>
