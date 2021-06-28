<?php

function daoGuardarComentarios($datos = array()){
    $comentarios = daoObtenerComentarios();
    $id = date('Ymdhisu');
    $comentarios[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'email' => $datos['email'],
        'mensaje' => $datos['mensaje'],
        'producto' => $datos['producto'],
        'fecha' => date('H:i:s d-m-Y')
    );
    $fp = fopen(DIR_BASE.'datos/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);

}
function daoObtenerComentarios(){
if (file_exists(DIR_BASE.'datos/comentarios.json')){
    $comentarios = json_decode(file_get_contents(DIR_BASE.'datos/comentarios.json'),true);
}
else{
    $comentarios = array();
}
return $comentarios;
}
function daoObtenerComentario($id){
    $comentarios = daoObtenerComentarios();
    return $comentarios[$id];
}
function daoModificarComentario($datos = array(), $id){
    $comentarios = daoObtenerComentarios();
    $id = date('Ymdhisu');
    $comentarios[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'email' => $datos['email'],
        'mensaje' => $datos['mensaje'],
        'producto' => $datos['producto'],
        'fecha' => $datos['fecha'],
    );
    $fp = fopen(DIR_BASE.'datos/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}

function daoBorrarComentario($id){
    $comentarios = daoObtenerComentarios();
    var_dump($comentarios);
    
    //die();
    if (isset($comentarios[$id])) {
        unset($comentarios[$id]);
    }
    file_put_contents(DIR_BASE.'datos/comentarios.json',json_encode($comentarios));
}



?>