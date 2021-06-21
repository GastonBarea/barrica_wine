<?php

function daoGuardarProductos($datos = array()){
    $productos = daoObtenerProductos();
    $id = date('Ymdhisu');
    $productos[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'precio' => $datos['precio'],
        'contenido' => $datos['contenido'],
        'cosecha' => $datos['cosecha'],
        'categotiaTipo' => $datos['categotiaTipo'],
        'categotiaUva' => $datos['categotiaUva'],
        'marca' => $datos['marca'],
        'descripcion' => $datos['descripcion'],
        'imagenLG' => $datos['imagenLG'],
        'imagenSM' => $datos['imagenSM'],
        'activa' => isset($datos['activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/productos.json',json_encode($productos));

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
    $id = date('Ymdhisu');
    $productos[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'precio' => $datos['precio'],
        'contenido' => $datos['contenido'],
        'cosecha' => $datos['cosecha'],
        'categotiaTipo' => $datos['categotiaTipo'],
        'categotiaUva' => $datos['categotiaUva'],
        'marca' => $datos['marca'],
        'descripcion' => $datos['descripcion'],
        'imagenLG' => $datos['imagenLG'],
        'imagenSM' => $datos['imagenSM'],
        'activa' => isset($datos['activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/productos.json',json_encode($productos));
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