<?php

function daoGuardarCategoriasUvas($datos = array()){
    $productos = daoObtenerCategoriasUva();
    $id = date('Ymdhisu');
    $productos[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'descripcion' => $datos['descripcion'],
        'activa' => isset($datos['activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/uvas.json',json_encode($productos));

}

function daoObtenerCategoriaUva($id){
    $productos = daoObtenerCategoriasUva();
    return $productos[$id];
}

function daoObtenerCategoriasUva(){
if (file_exists(DIR_BASE.'datos/uvas.json')){
    $catsUvas = json_decode(file_get_contents(DIR_BASE.'datos/uvas.json'),true);
}
else{
    $catsUvas = array();
}
return $catsUvas;
}

function daoModificarCategoriaUva($datos = array(), $id){
    $productos = daoObtenerCategoriasUva();
$productos[$id] = array(
    'id' => $id,
    'nombre' => $datos['nombre'],
    'descripcion' => $datos['descripcion'],
    'activa' => isset($datos['activa'])?true:false,
);
file_put_contents(DIR_BASE.'datos/uvas.json',json_encode($productos));
}

function daoBorrarCategoriaUva($id){
    $productos = daoObtenerCategoriasUva();
    if (isset($productos[$id])) {
        unset($productos[$id]);
    }
    /*$fp = fopen(DIR_BASE.'datos/productos.json','w');
    fwrite($fp, json_encode($productos));
    fclose($fp);*/
    file_put_contents(DIR_BASE.'datos/uvas.json',json_encode($productos));
}





?>