<?php
/*===============================
Mostrar errores
===============================*/
ini_set('Display_error',1);
ini_set('log_error',1);
ini_set('error_log','C:\xampp\htdocs\himnario/php_error_log');
/*===============================
Requerimientos
================================*/
require_once 'models/connection.php';
echo '<pre>'; print_r(Connection::connect()); echo '</pre>';
return;


require_once 'controllers/routescontroller.php';
$inicio = new RoutesController();
$inicio -> index();