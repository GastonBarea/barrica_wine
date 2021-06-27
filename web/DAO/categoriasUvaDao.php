<?php
function  daoObtenerCategoriasUva(){
if (file_exists(DIR_BASE.'datos/uvas.json')){
    $uvas = json_decode(file_get_contents(DIR_BASE.'datos/uvas.json'),true);
}
else{
    $uvas = array();
}
return $uvas;
}
function daoGuardarUva($datos = array()){
    $uvas = daoObtenerCategoriasUva();
    $id = date('Ymdhisu');
    $uvas[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'descripcion' => $datos['descripcion'],
        'Activa' => isset($datos['Activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/uvas.json',json_encode($uvas));
    return $id;

}
function daoObtenerUva($id){
    iasUva();
    return $uvas[$id];
}
function daoModificarUva($datos = array(), $id){
        $uvas = daoObtenerCategoriasUva();
    $uvas[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'descripcion' => $datos['descripcion'],
        'Activa' => isset($datos['Activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/uvas.json',json_encode($uvas));
}
function daoBorrarUva($id){
    $uvas = daoObtenerCategoriasUva();
    if (isset($uvas[$id])) {
        unset($uvas[$id]);
    }
    file_put_contents(DIR_BASE.'datos/uvas.json',json_encode($uvas));
}


?>