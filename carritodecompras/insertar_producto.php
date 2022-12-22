<?php
include("conexion.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];



$sql = "INSERT INTO productos VALUES ('$id','$nombre','$precio')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index2.php");
}else{

}

?>