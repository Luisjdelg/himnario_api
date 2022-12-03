<?php
require_once "controllers/get.controller.php";
$table = $rutaArray[1];
$response = GetController::getData($table);
print_r($response);

return;

$data = array(
    'status' => '200',
    'result' => 'soicitud GET'

);
echo json_encode($data, http_response_code($data['status']));
//return;