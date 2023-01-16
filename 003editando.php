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

$consulta = "SELECT * FROM `champ` WHERE `id`= $_GET[id]";
$campeonseleccionado = mysqli_query($conexion, $consulta);
$row = mysqli_fetch_assoc($campeonseleccionado);
$name = $row["name"];
$rol = $row["rol"];
$difficulty = $row["difficulty"];
$description = $row["description"];
$id = $row["id"];
?>

<form method="POST" action="003guardado.php">
    <input type="number" name="id" value="<?=$id?>" hidden>

<label name = "name" for = "name">Nombre: </label><input name = "name" type='text' id="name" value="<?php echo $name?>"> <br><br>
<label name = "description" for = "description">Descripcion: </label><input name = "description" type='text' id="description" value="<?php echo $description?>"> <br><br>
<label name = "rol" for = "rol">Rol : </label><select name = "rol">
                <option value="Asesinos" <?php if($rol=="Asesinos")echo "selected" ?>>Asesinos</option>
                <option value="Luchadores" <?php if($rol=="Luchadores")echo "selected" ?>>Luchadores</option>
                <option value="Magos"> <?php if($rol=="Magos")echo "selected" ?>Magos</option>
                <option value="Tiradores"> <?php if($rol=="Tiradores")echo "selected" ?>Tiradores</option>
                <option value="Apoyos"> <?php if($rol=="Apoyos")echo "selected" ?>Apoyos</option>
                <option value="Tanques"> <?php if($rol=="Tanques")echo "selected" ?>Tanques</option>

            </select><br><br>
            
<label name = "difficulty" for ="difficulty">Dificultad: </label><select name = "difficulty">
                <option value="Alta" <?php if($difficulty=="Alta")echo "selected" ?>>Alta</option>
                <option value="Moderada" <?php if($difficulty=="Moderada")echo "selected" ?>>Moderada</option>
                <option value="Baja" <?php if($difficulty=="Baja")echo "selected" ?>>Baja</option>

            </select>


<input type="submit" value="Guardar cambios">

</form>


</body>
</html>






