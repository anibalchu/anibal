<?php
include("cn.php");
$Nota="select * from trimestre";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="califica.css">
    <title>pagina escolar</title>
</head>
<body>
    <header> 
        <div class="menu">
        <img src="logo.png" alt="" height="50" width="80">
        <nav> 
            <h1><b> <i>PAGINA ESCOLAR</i> <b> <foin color="#6A0888"></foin></h1> 
            <ul>
            <li><a href="ADMIN.PHP">REGRESAR</a></li>
        </nav>
        </ul>
        </nav>
        </div>
    </header>
    
</body>
<body>
    <div class="container-add">
        <h2 class="container__title">cargar notas</h2>
        <form action="insertar.php" method="post" class="container__from">
            <label for="" class="container__label">nombre:</label>
            <input name="nombre" type="text" class="container__input">
            <label for="" class="container__label">apellido:</label>
            <input name="apellido"type="text" class="container__input">
            <label for="" class="container__label">nota:</label>
            <input name="nota" type="number" class="container__input">
            <input class="container__submit" type="submit" value="cargar">
        </form>
    </div>

    <div class="container-table">
        <div class="table__title">notas de alumnos </div>
        <div class="table__header">nombre</div>
        <div class="table__header">apellido</div>
        <div class="table__header">nota</div>
        <?php $resultado = mysqli_query($conexion, $Nota);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row ["nombre"];?></div>
            <div class="table__item"><?php echo $row ["apellido"];?></div>
            <div class="table__item"><?php echo $row ["nota"];?></div>
            <?php } mysqli_free_result($resultado);?>
    </div>
</body>
</html> 
