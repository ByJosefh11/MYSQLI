
<?php

    $conexion = mysqli_connect("localhost", "root", "", "lol");

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $id = $_GET['id'];
    $consulta = "DELETE FROM `champ` WHERE id = $id";
    $borracampeon = mysqli_query($conexion, $consulta);
    header("Location: 002campeones.php");
?>