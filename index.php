<?php

ini_set('Display_error',1);
ini_set('log_error',1);
ini_set('error_log','C:\xampp\htdocs\himnario/php_error_log');
require_once 'controllers/routescontroller.php';
$inicio = new RoutesController();
$inicio -> index();