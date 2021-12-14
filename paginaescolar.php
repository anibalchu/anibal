<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>pagina escolar</title>
</head>
<body>
    <header> 
        <div class="menu">
        <img src="logo.png" alt="" height="50" width="80">
        <nav> 
            <h1><b> <i>PAGINA ESCOLAR</i> <b> <foin color="#6A0888"></foin></h1> 
            <ul>
            <li><a href="#">SOBRE MI</a></li>
            <li><a href="#">SERVICIOS</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">CONTACTOS</a></li>
        <?php
        if(isset($_SESSION["usuario"])){
        ?>
        </nav>
            <li><a href="">REGISTRO</a></li>
            <li><a href="">CALIFICACION</a></li>
            <li><a href="">INACISTENCIA</a></li>
            <li><a href="">CERRAR SESSION</a></li>
        <?php
            }else{
        ?>
            <li><a href="login.html">INICIAR SESSION</a></li>
        <?php
        }
        ?>
        </ul>
        </nav>
        </div>
    </header>
    
</body>
</html> 
