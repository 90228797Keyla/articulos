<?php
/**
* The logout file
* destroys the session
* expires the cookie
* redirects to login.php
*/

session_start();
session_destroy();

// setcookie('usu_clave', '', time() - 1*24*60*60);
// setcookie('usu_usuario', '', time() - 1*24*60*60);
header("location: login.php");
?>
<html>
<head>
<head>
<meta http-equiv="refresh" content="1;URL=login.php"> 
<title></title>
</head>
<body></body>
</html>
	