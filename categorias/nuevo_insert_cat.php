<?php include_once('../libreria/conexion.php');?>

<?php 
 if(isset($_POST['guardar_categoria'])) $accion = $_POST['guardar_categoria'];
 else $accion = "";

 if($accion == "Guardar Categoria"){
    
     if( $_POST['nombre'] != ""  
         ) {

        // INSERTAR  
        $sql_categoria_insert='INSERT INTO categorias (
                                    nombre
                                )
                                VALUES (
                                    "'.trim($_POST['nombre']).'"
                                )';

        echo $sql_categoria_insert;
        $insert = mysqli_query($conexion, $sql_categoria_insert);
        $categoria_orden = mysqli_insert_id ($conexion);
        
        if ($insert) echo '<h1>Categría guardada exitosamente.</h1>';
        else  echo '<h1>Error, la categoría no se guardó.</h1>';

    } else echo '<h1>Error, faltan datos en la forma de captura</h1>';
}
?>

<div><a href="../../../catalogos/categorias/categorias.php">Regresar</a></div>