<?php
    //Solicitamoos la conexión a la Db a travez del método require()
    require('conexion.php');
    //Creamos una variable que traiga los datos que el ususrario envia desde el formualrio
    $estudiante=$_GET['estudiante'];

    //crear una variable que contendra la sentencia SQL para guardar
    //los datos en la tabla de la DB
    $sql="INSERT INTO estudiantes (nombre,apellido,telefono,profesion,lenguaje) 
    VALUES ('$estudiante[nombre]','$estudiante[apellido]','$estudiante[telefono]','$estudiante[profesion]','$estudiante[lenguaje]')";

    //El metodo mysqli_query envía los datos
    //Necesita la conexion y sentencia SQL
    mysqli_query($conexion, $sql);

    //Direccionamiento de rutas
    header('Location: mostrar.php');

?>