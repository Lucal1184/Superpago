<?php
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM productos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>CRUD de Productos</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear Producto</h1>
        <form action="insertar_producto.php" method="POST">
            <input type="text" nombre="nombre" placeholder="nombre">
            <input type="text" precio="precio" placeholder="precio">
            <input type="submit" value="Agregar">
        </form>
    </div>

    
</body>

</html>