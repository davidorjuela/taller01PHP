 <?php
    require('conexion.php');

    //Seleccionamos todos los datos de la tabla videojuegos
    $id=$_GET['id'];
    $sql = "SELECT * FROM estudiantes WHERE id='$id'";
    //Crear una varialbe que guarde los datos de la consulta
    $resultado =mysqli_query($conexion,$sql);
    //Crear variable que se encargara de manipular y contener el resultado
    $estudiante = mysqli_fetch_all($resultado);
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="flexBox.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body class="flexColumn jCCenter aICenter">
    <h1>Editar "<?php echo $estudiante[0][1]." ".$estudiante[0][2]; ?>"</h1>
    <form action="modificar.php" method="GET">
        <input type="text" name="estudiante[id]" value="<?php echo $estudiante[0][0]; ?>" style="display:none">
        <div class="form-group">
            <label for="estudiante[apellido]">Telefono:</label> 
            <input type="text" name="estudiante[telefono]" value="<?php echo $estudiante[0][3]; ?>">
        </div>
        <div class="form-group">
            <label for="estudiante[apellido]">Profesión:</label>
            <input type="text" name="estudiante[profesion]" value="<?php echo $estudiante[0][4]; ?>">
        </div>
        <div class="form-group">
            <label for="estudiante[apellido]">Tecnología favorita:</label>
            <input type="text" name="estudiante[lenguaje]" value="<?php echo $estudiante[0][5]; ?>">
        </div>
        <button type="submit">Guardar</button>    
    </form>
</body>
</html>