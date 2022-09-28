<?php session_start();?>
<?php include_once('libreria/conexion.php');?>
<?php if (isset($_POST['username']) && isset($_POST['password'])){

    $sql_usuario='SELECT * FROM usuarios 
                    WHERE usuario = "'.addslashes($_POST['username']).'" 
                    AND contrasena = "'.md5(trim($_POST['password'])).'"';
                    
    echo $sql_usuario.'</br>';
    $datos_usuario=mysqli_query($conexion, $sql_usuario);
    $num_usuario=mysqli_num_rows($datos_usuario);

    //$num_usuario=0;

    if ($num_usuario==1){

        $reg_usuario=mysqli_fetch_array($datos_usuario);
        
        // USUARIO
        // Clave del usuario
        $_SESSION['usu_clave']=$reg_usuario['usuario_id'];
        
        // Nombre del usuario
        $_SESSION['usu_usuario']=$reg_usuario['usuario'];
        
        echo "Usuario_ID: " . $_SESSION['usu_clave'].'</br>';
        echo "Nombre: " . $_SESSION['usu_usuario'].'</br>';
        
        echo '<meta http-equiv="refresh" content="1;URL=panel.php">';
        
        $notificacion=1;
    } else $notificacion=2;
}?>

<form class="form-signin" action="login.php" method="post">
    <h2 class="form-signin-heading">Iniciar sesi&oacute;n</h2>
    <label for="username" class="sr-only">Usuario:</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="Usuario" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Constraseña" required>
    
    <button class="btn btn-lg btn-green btn-block" type="submit">Acceder</button>
    <input type="hidden" name="accion" value="login-validar-usuario" />	
</form>