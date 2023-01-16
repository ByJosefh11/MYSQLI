<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardado</title>
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

$newname = $_POST["name"];
$newrol = $_POST["rol"];
$newdifficulty = $_POST["difficulty"];
$newdescription = $_POST["description"];
$id = $_POST["id"];


$consulta = "UPDATE `champ` SET `name`= '$newname', `rol` = '$newrol', `difficulty` = '$newdifficulty', `description` = '$newdescription' WHERE `id`=$id";
$actualizar = mysqli_query($conexion, $consulta);


?>
</body>
</html>