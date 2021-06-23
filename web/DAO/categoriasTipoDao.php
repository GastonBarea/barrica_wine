<?php

function daoGuardarCategoriasTipos($datos = array()){
    $productos = daoObtenerCategoriasTipo();
    $id = date('Ymdhisu');
    $productos[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'descripcion' => $datos['descripcion'],
        'activa' => isset($datos['activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/tipos.json',json_encode($productos));

}

function daoObtenerCategoriaTipo($id){
    $productos = daoObtenerCategoriasTipo();
    return $productos[$id];
}


function daoObtenerCategoriasTipo(){
if (file_exists(DIR_BASE.'datos/tipos.json')){
    $catsTipos = json_decode(file_get_contents(DIR_BASE.'datos/tipos.json'),true);
}
else{
    $catsTipos = array();
}
return $catsTipos;
}


function daoModificarCategoriaTipo($datos = array(), $id){
    $productos = daoObtenerCategoriasTipo();
$productos[$id] = array(
    'id' => $id,
    'nombre' => $datos['nombre'],
    'descripcion' => $datos['descripcion'],
    'activa' => isset($datos['activa'])?true:false,
);
file_put_contents(DIR_BASE.'datos/tipos.json',json_encode($productos));
}

function daoBorrarCategoriaTipo($id){
    $productos = daoObtenerCategoriasTipo();
    if (isset($productos[$id])) {
        unset($productos[$id]);
    }
    /*$fp = fopen(DIR_BASE.'datos/productos.json','w');
    fwrite($fp, json_encode($productos));
    fclose($fp);*/
    file_put_contents(DIR_BASE.'datos/tipos.json',json_encode($productos));
}


?>