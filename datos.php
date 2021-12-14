<?php

// if($conn){
//     echo "conectado";
// }else{
//     echo "error de conecion";
// }

$dni=$_REQUEST ['dni'];
$clave=$_REQUEST ['contrasenia'];
echo $dni;
echo $clave;
try{
    $conexion= new pdo('mysql:host=localhost;dbname=datos', 'root','');
}catch(pdoxeptioon$e){
    echo 'Error: '.$e->getmessage();
}
$statement=$conexion-> prepare('SELECT * from usuario where dni =:dni and clave =:clave');
$statement ->execute (array(':dni'=> $dni,':clave'=>$clave));
$resultado= $statement->fetch();

if($resultado!=null){
    
    session_start();
    $_SESSION["usuario"] = $dni;
    echo "si";
    
    header("location:paginaescolar.php");

}else {
    echo '<script>
    const form = document.querySelector("#form")
    function f(){
        form.EventPrevenDefault();
    }
    document.getElementById("stop").innerHTML="error"
    </script>';
}
echo $_SESSION["usuario"];

if(isset($_SESSION["usuario"])){
    header("location:paginaescolar.php");
    }else{
        echo"no hay secion";
    }
?>