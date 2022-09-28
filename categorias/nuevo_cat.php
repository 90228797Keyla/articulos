<?php include_once('../libreria/conexion.php');?>

<h1>Nueva Categoria</h1>
<hr>
<form action="nuevo_insert_cat.php" method="POST">
    <div>
        <div>Nombre:</div>
        <div><input type="text" name="nombre" maxlength="100"></div>
    </div>

    <div>
        <div><input type="submit" name="guardar_categoria" value="Guardar Categoria"></div>
    </div>
</form>

<div><a href="../../../catalogos/categorias/categorias.php">Regresar</a></div>

