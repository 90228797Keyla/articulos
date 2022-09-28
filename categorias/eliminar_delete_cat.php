<?php include_once('../libreria/conexion.php');?>

<?php 
 if(isset($_POST['eliminar_categoria'])) $accion = $_POST['eliminar_categoria'];
 else $accion = "";

 if($accion == "Eliminar Categoria"){
    
     if( $_POST['categoria_id'] != ""
         ) {
        $sql_categoria = 'SELECT * FROM categorias 
                        WHERE categoria_id = '.$_POST['categoria_id'];
                        
        echo $sql_categoria.'</br>';
        $datos_categoria = mysqli_query($conexion, $sql_categoria);
        $num_categoria = mysqli_num_rows($datos_categoria);

        if($num_categoria > 0){
            // Eliminar  
            $sql_categoria_delete='DELETE FROM categorias
                                  WHERE categoria_id = '.$_POST['categoria_id'];

            echo $sql_categoria_delete;
            $delete = mysqli_query($conexion, $sql_categoria_delete);
            
            if ($delete) echo '<h1>Categoría se eliminó correctamente.</h1>';
            else  echo '<h1>Error, la categoría no se eliminó.</h1>';

        } else  echo '<h1>Error, el registro ya fue eliminado...</h1>';


    } else echo '<h1>Error, ID incorrecto...</h1>';
}
?>

<div><a href="./../../catalogos/categorias/categorias.php">Regresar</a></div>