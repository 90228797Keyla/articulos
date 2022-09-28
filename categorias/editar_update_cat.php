<?php include_once('../libreria/conexion.php');?>

<?php 
if(isset($_POST['editar_categoria'])) $accion = $_POST['editar_categoria'];
 else $accion = "";

 if($accion == "Editar Categoria"){
    
     if( $_POST['nombre'] != ""
         ) {

        // UPDATE  
        $sql_categoria_update='UPDATE categorias SET 
                                    nombre = "'.trim($_POST['nombre']).'"
                                WHERE categoria_id = '.$_POST['categoria_id'];

        //echo $sql_categoria_update;
        $update = mysqli_query($conexion, $sql_categoria_update);
        
        if ($update) echo '<h1>Categoría editado exitosamente.</h1>';
        else  echo '<h1>Error, la categoría no se editó.</h1>';

    } else echo '<h1>Error, faltan datos en la forma de captura</h1>';
}
?>

<div><a href="../../../catalogos/categorias/categorias.php">Regresar</a></div>