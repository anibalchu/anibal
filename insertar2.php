<?php
include("registro.php");

$DNI= $_REQUEST["DNI"];
$APELLIDO= $_REQUEST["APELLIDO"];
$NOMBRE= $_REQUEST["NOMBRE"];
$DIRECCION= $_REQUEST["DIRECCION"];
$TELEFONO= $_REQUEST["TELEFONO"];
$CORREO= $_REQUEST["CORREO"];


$insertar="insert into personas(DNI, APELLIDO, NOMBRE, DIRECCION, TELEFONO, CORREO) values ('$DNI','$APELLIDO','$NOMBRE','$DIRECCION','$TELEFONO','$CORREO')";

$resultado= mysqli_query($conexion,$insertar);
if($resultado){
    echo "<script>alert('se ha cargado con exito');
    window.history.go(-1);</script>";
}else{
    echo "<script>alert('error en la carga');window.history.go(-1);</script>";
}