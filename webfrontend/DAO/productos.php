<?php

function guardarProductos($datos = array()){
    $productos = obtenerProductos();
    $productos[date('Ymdhisu')] = array(
        'nombre' => $datos['nombre'],
        'email' => $datos['email'],
        'mensaje' => $datos['mensaje'],
        'producto' => $datos['producto'],
        'fecha' => date('H:i:s d-m-Y')
    );
    $fp = fopen(DIR_BASE.'datos/productos.json','w');
    fwrite($fp, json_encode($productos));
    fclose($fp);

}
function obtenerProductos(){
if (file_exists(DIR_BASE.'datos/productos.json')){
    $productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),true);
}
else{
    $productos = array();
}
return $productos;
}
function obtenerProducto($id){
    $productos = obtenerProductos();
    return $productos[$id];
}
function modificarProducto($datos = array(), $id){
    $productos = obtenerProductos();
    $productos[$id] = array(
        'nombre' => $datos['nombre'],
        'email' => $datos['email'],
        'mensaje' => $datos['mensaje'],
        'producto' => $datos['producto'],
        'fecha' => date('H:i:s d-m-Y')
    );
    $fp = fopen(DIR_BASE.'datos/productos.json','w');
    fwrite($fp, json_encode($productos));
    fclose($fp);
}
function borrarProducto($id){
    $productos = obtenerProductos();
    unset($productos[$id]);
    $fp = fopen(DIR_BASE.'datos/productos.json','w');
    fwrite($fp, json_encode($productos));
    fclose($fp);
}


?>