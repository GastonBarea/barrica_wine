<?php

function daoGuardarMarcas($datos = array()){
    $productos = daoObtenerMarcas();
    $id = date('Ymdhisu');
    $productos[$id] = array(
        'id' => $id,
        'Bodegas' => $datos['Bodegas'],
        'Activa' => isset($datos['Activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/marcas.json',json_encode($productos));

}

function daoObtenerMarca($id){
    $productos = daoObtenerMarcas();
    return $productos[$id];
}

function daoObtenerMarcas(){
if (file_exists(DIR_BASE.'datos/marcas.json')){
    $catsMarcas = json_decode(file_get_contents(DIR_BASE.'datos/marcas.json'),true);
}
else{
    $catsMarcas = array();
}
return $catsMarcas;
}

function daoModificarMarca($datos = array(), $id){
    $productos = daoObtenerMarcas();
$productos[$id] = array(
    'id' => $id,
    'nombre' => $datos['nombre'],
    'descripcion' => $datos['descripcion'],
    'activa' => isset($datos['activa'])?true:false,
);
file_put_contents(DIR_BASE.'datos/marcas.json',json_encode($productos));
}

function daoBorrarMarca($id){
    $productos = daoObtenerMarcas();
    if (isset($productos[$id])) {
        unset($productos[$id]);
    }
    /*$fp = fopen(DIR_BASE.'datos/productos.json','w');
    fwrite($fp, json_encode($productos));
    fclose($fp);*/
    file_put_contents(DIR_BASE.'datos/marcas',json_encode($productos));
}





?>