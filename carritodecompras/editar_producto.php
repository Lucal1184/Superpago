<?php

include("conexion.php");
$con = connection();


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];


$sql="UPDATE productos SET nombre='$nombre', precio='$precio' WHERE id='$id' ";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index2.php");
}else{

}

?>