<?php

function daoGuardarProductos($datos = array()){
    $productos = daoObtenerProductos();
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
function daoObtenerProductos(){
if (file_exists(DIR_BASE.'datos/productos.json')){
    $productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),true);
}
else{
    $productos = array();
}
return $productos;
}
function daoObtenerProducto($id){
    $productos = daoObtenerProductos();
    return $productos[$id];
}
function daoModificarProducto($datos = array(), $id){
    $productos = daoObtenerProductos();
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
function daoBorrarProducto($id){
    $productos = daoObtenerProductos();
    if (isset($productos[$id])) {
        unset($productos[$id]);
    }
    /*$fp = fopen(DIR_BASE.'datos/productos.json','w');
    fwrite($fp, json_encode($productos));
    fclose($fp);*/
    file_put_contents(DIR_BASE.'datos/productos.json',json_encode($productos));
}


?>