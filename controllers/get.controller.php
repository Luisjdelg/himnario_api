<?php
require_once "models/get.model.php";

class GetController{
    static function getData($table){
        $response = GetModel::getData($table);
        return $response;

    }
}