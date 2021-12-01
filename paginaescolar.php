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
            <h1><b> <i>pagina escolar</i> <b> <foin color="#6A0888"></foin></h1> 
        <ul>
        <li><a href="#">sobre mi</a></li>
        <li><a href="#">servicios</a></li>
        <li><a href="#">blog</a></li>
        <li><a href="#">contactos</a></li>
        <?php
        if(isset($_SESSION["usuario"])){
        ?>
        
        <li><a href="">salir</a></li>


        
        <?php
            }else{
        ?>
            <li><a href="login.html">iniciar secion</a></li>
        <?php
        }
        ?>
        </ul>
        </nav>
        </div>
    </header>
   
    
</body>
</html> 
