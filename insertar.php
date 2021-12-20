<?php
include("calificacion.php");

$NOMBRE= $_REQUEST["NOMBRE"];
$APELLIDO= $_REQUEST["APELLIDO"];
$ID_MATERIA= $_REQUEST["ID_MATERIA"];
$NOTA= $_REQUEST["NOTA"];

$insertar="insert into TRIMESTRE(NOMBRE, APELLIDO, ID_MATERIA, NOTA) values ('$NOMBRE','$APELLIDO','$ID_MATERIA','$NOTA')";

$resultado= mysqli_query($conexion,$insertar);
if($resultado){
    echo "<script>alert('se ha cargado con exito');
    window.history.go(-1);</script>";
}else{
    echo "<script>alert('error en la carga');window.history.go(-1);</script>";
}