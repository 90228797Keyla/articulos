<?php include_once('../libreria/conexion.php');?>

<?php 
$sql_categoria = 'SELECT * FROM categorias 
                WHERE categoria_id = '.$_GET['categoria_id'];
                
echo $sql_categoria.'</br>';
$datos_categoria = mysqli_query($conexion, $sql_categoria);
$num_categoria = mysqli_num_rows($datos_categoria);
$reg_categoria = mysqli_fetch_array($datos_categoria);

//echo $num_categoria.'</br>';?>

<h1>Editar Categoría</h1>
<hr>
<form action="editar_update_cat.php" method="POST">
    <div>
        <div>ID:</div>
        <div><input type="text" name="id" disabled value="<?php echo $reg_categoria['categoria_id']; ?>"></div>
    </div>
    <div>
        <div>Nombre:</div>
        <div><input type="text" name="nombre" maxlength="100" value="<?php echo $reg_categoria['nombre']; ?>"></div>
    </div>

    <div>
        <div><input type="hidden" name="categoria_id" value="<?php echo $reg_categoria['categoria_id']; ?>"></div>
    </div>
    <div>
        <div><input type="submit" name="editar_categoria" value="Editar Categoria"></div>
    </div>
</form>

<div><a href="../../../catalogos/categorias/categorias.php">Regresar</a></div>

