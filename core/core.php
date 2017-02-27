<?php

//Sesion
session_start();

//Variables de la pagina
define('HTML_DIR','html/');
define('Title', 'coolToon');
define('APP_URL', 'http://cooltoon.ga/');
define('Copyright', 'Copyright &copy; ' . date('Y',time()) . ' toonCool.');


//Variables de la BD
define('Host', 'localhost');
define('User', 'root');
define('Pass', '123');
define('DB', 'd');

//Requerido
require ('core/models/conexion.php');
require ('core/models/functions_load.php');

require ('core/bin/functions/Encrypt.php');
require ('core/bin/functions/user_F.php');


//SQL
$users_F = Users();



 ?>
