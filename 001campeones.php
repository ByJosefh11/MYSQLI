<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>


<?php

$conexion = mysqli_connect("localhost","root", "", "LOL");

// COMOPROVAMOS LA CONEXIÓN
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();

}

// CONSULTA A LA BASE DE DATOS

$consulta = "SELECT * FROM `champ`";
$listacampeones = mysqli_query($conexion, $consulta);

// COMPROBAMOS SI EL SERVIDOR NOS HA DEVUELTO RESULTADOS
if($listacampeones){

    // RECORREMOS CADA RESULTADO QUE NOS DEVUELVE EL SERVIDOR
    foreach ($listacampeones as $campeon) {
        echo "$campeon[name] <br>";

    }

}

?>

</body>
</html>