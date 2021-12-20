<?php
include("calificacion.php");

$nombre= $_REQUEST["nombre"];
$apellido= $_REQUEST["apellido"];
$nota= $_REQUEST["nota"];

$insertar="insert into trimestre(nombre, apellido, nota) values ('$nombre','$apellido','$nota')";

$resultado= mysqli_query($conexion,$insertar);
if($resultado){
    echo "<script>alert('se ha cargado con exito');
    window.location='/'</script>";
}else{
    echo "<script>alert('error en la carga');window.history.go(-1);</script>";
}