<?php
include("calificacion.php");

$NOMBRE= $_REQUEST["NOMBRE"];
$APELLIDO= $_REQUEST["APELLIDO"];
$FECHA= $_REQUEST["FECHA"];
$FALTAS= $_REQUEST["FALTAS"];

$insertar="insert into INACISTENCIA(NOMBRE, APELLIDO, FECHA, FALTAS) values ('$NOMBRE','$APELLIDO','$FECHA','$FALTAS')";

$resultado= mysqli_query($conexion,$insertar);
if($resultado){
    echo "<script>alert('se ha cargado con exito');
    window.history.go(-1);</script>";
}else{
    echo "<script>alert('error en la carga');window.history.go(-1);</script>";
}