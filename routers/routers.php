<?php

$rutaArray =  explode("/", $_SERVER['REQUEST_URI']);
$rutaArray = array_filter($rutaArray);
/*
***************************************
Cuando no se hace una peticion
***************************************
*/
if(count($rutaArray)==0){
    $data = array(

        'status' => '400',
        'result'=> 'No found '
    
    );
    echo  json_encode($data, http_response_code($data['status']));
return;
} 
/*
***************************************
Cuando no se hace una peticion
***************************************
*/

if(count($rutaArray)==1 && isset($_SERVER['REQUEST_METHOD'])){
/*
***************************************
Peticion GET
***************************************
*/
    if($_SERVER['REQUEST_METHOD']=="GET"){
        $data = array(
    
            'status' => '200',
            'result'=> 'soicitud GET'
        
        );
        echo  json_encode($data, http_response_code($data['status']));
    return;
    } 
    /*
***************************************
Peticion POST
***************************************
*/
if($_SERVER['REQUEST_METHOD']=="POST"){
    $data = array(

        'status' => '200',
        'result'=> 'soicitud POST'
    
    );
    echo  json_encode($data, http_response_code($data['status']));
return;
} 
/*
***************************************
Peticion PUT
***************************************
*/
if($_SERVER['REQUEST_METHOD']=="PUT"){
    $data = array(

        'status' => '200',
        'result'=> 'soicitud PUT'
    
    );
    echo  json_encode($data, http_response_code($data['status']));
return;
} 
/*
***************************************
Peticion DELETE
***************************************
*/
if($_SERVER['REQUEST_METHOD']=="DELETE"){
    $data = array(

        'status' => '200',
        'result'=> 'soicitud DELETE'
    
    );
    echo  json_encode($data, http_response_code($data['status']));
return;
} 
} 
