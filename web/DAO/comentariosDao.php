<?php

function daoGuardarComentarios($datos = array()){
    $comentarios = daoObtenerComentarios();
    $comentarios[date('Ymdhisu')] = array(
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
    $comentarios[$id] = array(
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
    unset($comentarios[$id]);
    $fp = fopen(DIR_BASE.'datos/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}



?>