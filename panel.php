<?php session_start();?>
<?php  if(!isset($_SESSION['usu_clave']))
            echo '<meta http-equiv="refresh" content="1;URL=login.php">';?>

<h1>Bienvenido <?php echo $_SESSION['usu_usuario'];?></h1>

<br>
<br>
<a href="../../../catalogos/articulos/listado.php">Articulos</a>
<br>
<br>
<a href="salir.php">Salir</a>