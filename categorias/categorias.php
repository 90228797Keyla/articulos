<?php include_once('../libreria/conexion.php');?>

<?php 
if(!empty($_GET['busqueda'])){
$busqueda = $_GET['busqueda'];
$sql_categorias = "SELECT * FROM categorias where nombre like '%".$busqueda."%'
                  OR categoria_id like '%".$busqueda."%'";
}else{
    $sql_categorias = "SELECT * FROM categorias";
}
$datos_categorias = mysqli_query($conexion, $sql_categorias);
$num_categorias = mysqli_num_rows($datos_categorias);
//echo $num_categorias.'</br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de categorías</title>
</head>
<body>
    <h1>Catálogo de categorías</h1>
    <form action="nuevo_cat.php" method="POST">
        <input type="submit" name="nuevo" value="Nuevo">
    </form>
    <br>
    
    <form action="" method="GET">
        <input type="text" name="busqueda">
        <input type="submit" name="enviar" value="Buscar"> 
    </form>

    <?php if($num_categorias>0){ ?>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td colspan="2">Acciones</td>
        </tr>
        
        <?php while($reg_categorias = mysqli_fetch_array($datos_categorias)){ ?>
            <tr>
                <td><?php echo $reg_categorias['categoria_id'];?></td>
                <td><?php echo $reg_categorias['nombre'];?></td>
                <td><a href="editar_cat.php?categoria_id=<?php echo $reg_categorias['categoria_id'];?>">Editar</a></td>
                <td><a href="eliminar_cat.php?categoria_id=<?php echo $reg_categorias['categoria_id'];?>">Eliminar</a></td>
            </tr>
        <?php }?>
    
    <?php }else{?>
        <td colspan="5"><h1>No está registrado o no existe la categoría</h1></td>
        <?php }?>
    </table>
    <a href="../../../catalogos/categorias/categorias.php">Regresar</a>
    <!--<div><a href="listado.php">Regresar</a></div>-->
</body>
</html>
