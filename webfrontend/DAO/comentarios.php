<?php

function guardarComentarios($datos = array()){
    $comentarios = obtenerComentarios();
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
function obtenerComentarios(){
if (file_exists(DIR_BASE.'datos/comentarios.json')){
    $comentarios = json_decode(file_get_contents(DIR_BASE.'datos/comentarios.json'),true);
}
else{
    $comentarios = array();
}
return $comentarios;
}


function obtenerComentario($datos = array()){

}
function modificarComentario(){
return  0;
}
function borrarComentarios(){
    return  0;
}
?>