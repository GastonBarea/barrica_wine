<?php
function  daoObtenerCategoriasTipo(){
if (file_exists(DIR_BASE.'datos/tipos.json')){
    $tipos = json_decode(file_get_contents(DIR_BASE.'datos/tipos.json'),true);
}
else{
    $tipos = array();
}
return $tipos;
}
function daoGuardarTipo($datos = array()){
    $tipos = daoObtenerCategoriasTipo();
    $id = date('Ymdhisu');
    $tipos[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'descripcion' => $datos['descripcion'],
        'activa' => isset($datos['activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/tipos.json',json_encode($tipos));
    return $id;

}
function daoObtenerTipo($id){
    $tipos = daoObtenerCategoriasTipo();
    return $tipos[$id];
}
function daoModificarTipo($datos = array(), $id){
        $tipos = daoObtenerCategoriasTipo();
    $tipos[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'descripcion' => $datos['descripcion'],
        'activa' => isset($datos['activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/tipos.json',json_encode($tipos));
}
function daoBorrarTipo($id){
    $tipos = daoObtenerCategoriasTipo();
    if (isset($tipos[$id])) {
        unset($tipos[$id]);
    }
    file_put_contents(DIR_BASE.'datos/tipos.json',json_encode($tipos));
}


?>