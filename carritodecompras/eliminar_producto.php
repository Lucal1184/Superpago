<?php

include("conexion.php");
$con = connection();


$id=$_GET["id"];

$sql="DELETE FROM productos WHERE productos.id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index2.php");
}else{

}

?>