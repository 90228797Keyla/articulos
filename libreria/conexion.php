<?php // CONEXION BD

$base_datos='curso_php_bd';

$conexion= mysqli_connect("localhost", "root", "", $base_datos) or 
	die("No se puede conectar al Servidor de Base de Datos");

// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conexion, "SET CHARACTER SET 'utf8'");?>