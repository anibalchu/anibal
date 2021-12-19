<?php
include("cn.php");
$inasistencia="select * from inacistencia";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="CALIFICA.CSS">
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
        <h2 class="container__title">cargar faltas</h2>
        <form action="insertar.php" method="post" class="container__from">
            <label for="" class="container__label">nombre:</label>
            <input name="nombre" type="text" class="container__input">
            <label for="" class="container__label">apellido:</label>
            <input name="apellido"type="text" class="container__input">
            <label for="" class="container__label">fecha:</label>
            <input name="fecha" type="text" class="container__input">
            <label for="" class="container__label">faltas:</label>
            <input name="faltas" type="number" class="container__input">
            <input class="container__submit" type="submit" value="cargar">
        </form>
    </div>

    <div class="container-table">
        <div class="table__title">faltas de alumnos </div>
        <div class="table__header">nombre</div>
        <div class="table__header">apellido</div>
        <div class="table__header">fecha</div>
        <div class="table__header">faltas</div>
        <?php $resultado = mysqli_query($conexion, $inacistencia);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row ["nombre"];?></div>
            <div class="table__item"><?php echo $row ["apellido"];?></div>
            <div class="table__item"><?php echo $row ["fecha"];?></div>
            <div class="table__item"><?php echo $row ["faltas"];?></div>
            <?php } mysqli_free_result($resultado);?>
    </div>
</body>

</html> 