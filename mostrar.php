<?php
    require('conexion.php');

    //Seleccionamos todos los datos de la tabla videojuegos
    $sql = "SELECT * FROM estudiantes";
    //Crear una varialbe que guarde los datos de la consulta
    $resultado =mysqli_query($conexion,$sql);
    //Crear variable que se encargara de manipular y contener el resultado
    $estudiantes = mysqli_fetch_all($resultado);
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
    <h1>BICTIA CLASS</h1>
    <div class="form flexColumn jCCenter aICenter">
        <h2>Agregar nuevo estudiante</h2>
        <form action="insertar.php" method="GET" class="flexColumn aIcenter jCCenter">
            <div class="flexRow jCAround">
                <div class="form-group">
                    <label for="estudiante[nombre]">Nombre:</label>
                    <input type="text" name="estudiante[nombre]">
                </div>
                <div class="form-group">
                    <label for="estudiante[apellido]">Apellido:</label>
                    <input type="text" name="estudiante[apellido]">
                 </div>
            </div>
            <div class="flexRow jCAround">
                <div class="form-group">
                    <label for="estudiante[telefono]">Teléfono:</label>
                    <input type="text" name="estudiante[telefono]">
                </div>
                <div class="form-group">
                    <label for="estudiante[profesion]">Profesión:</label>
                    <input type="text" name="estudiante[profesion]">
                </div>
            </div>
            <div class="flexRow jCAround form-group">
                <label for="estudiante[lenguaje]">Tecnología preferida:</label>
                <input type="text" name="estudiante[lenguaje]">
            </div>
            <button type="submit">Agregar</button>    
        </form>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>TELÉFONO</th>
            <th>PROFESIÓN</th>
            <th>LENGUAJE</th>
            <th>BORRAR</th>
            <th>EDITAR</th>
        </tr>

    <?php foreach($estudiantes as $estudiante): ?>
        <tr>
            <td><?php echo $estudiante[0]; ?></td>
            <td><?php echo $estudiante[1]; ?></td>
            <td><?php echo $estudiante[2]; ?></td>
            <td><?php echo $estudiante[3]; ?></td>
            <td><?php echo $estudiante[4]; ?></td>
            <td><?php echo $estudiante[5]; ?></td>
            <td><a href="eliminar.php?id=<?php echo $estudiante[0]; ?>">X</a></td>
            <td><a href="editar.php?id=<?php echo $estudiante[0]; ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>