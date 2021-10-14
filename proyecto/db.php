<?php
    $conexion = mysqli_connect('127.0.0.1', 'root', '', 'proyecto');

    if(!$conexion) {
        echo "Database connection failed";
    }
?>