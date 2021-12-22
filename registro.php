<?php
include("cn.php");
$personas="select * from personas";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="registro.css">
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
        <h2 class="container__title">registrar</h2>
        <form action="insertar2.php" method="post" class="container__from">
            <label for="" class="container__label">DNI</label>
            <input name="DNI" type="number" class="container__input">
            <label for="" class="container__label">APELLIDO:</label>
            <input name="APELLIDO"type="text" class="container__input">
            <label for="" class="container__label">NOMBRE:</label>
            <input name="NOMBRE" type="text" class="container__input">
            <label for="" class="container__label">DIRECCION:</label>
            <input name="DIRECCION" type="text" class="container__input">
            <label for="" class="container__label">TELEFONO:</label>
            <input name="TELEFONO" type="number" class="container__input">
            <label for="" class="container__label">CORREO:</label>
            <input name="CORREO" type="text" class="container__input">
            <input class="container__submit" type="submit" value="CARGAR">
        </form>
    </div>

    <div class="container-table">
        <div class="table__title">PERSONAS</div>
        <div class="table__header">DNI</div>
        <div class="table__header">APELLIDO</div>
        <div class="table__header">NOMBRE</div>
        <div class="table__header">DIRECCION</div>
        <div class="table__header">TELEFONO</div>
        <div class="table__header">CORREO</div>
        <?php $resultado = mysqli_query($conexion, $personas);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row ["DNI"];?></div>
            <div class="table__item"><?php echo $row ["APELLIDO"];?></div>
            <div class="table__item"><?php echo $row ["NOMBRE"];?></div>
            <div class="table__item"><?php echo $row ["DIRECCION"];?></div>
            <div class="table__item"><?php echo $row ["TELEFONO"];?></div>
            <div class="table__item"><?php echo $row ["CORREO"];?></div>
            <?php } mysqli_free_result($resultado);?>
    </div>
</body>

</html> 
