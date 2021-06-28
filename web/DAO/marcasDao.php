<?php
function daoObtenerMarcas(){
if (file_exists(DIR_BASE.'datos/c_marcas_bodegas.json')){
    $marcas = json_decode(file_get_contents(DIR_BASE.'datos/c_marcas_bodegas.json'),true);
}
else{
    $marcas = array();
}
return $marcas;
}
function daoGuardarMarca($datos = array()){
    $marcas = daoObtenerMarcas();
    $id = date('Ymdhisu');
    $marcas[$id] = array(
        'id' => $id,
        'Bodegas' => $datos['Bodegas'],
        'Activa' => isset($datos['Activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/c_marcas_bodegas.json',json_encode($marcas));
    return $id;

}
function daoObtenerMarca($id){
    $marcas = daoObtenerMarcas();
    return $marcas[$id];
}
function daoModificarMarca($datos = array(), $id){
        $marcas = daoObtenerMarcas();
    $marcas[$id] = array(
        'id' => $id,
        'Bodegas' => $datos['Bodegas'],
        'Activa' => isset($datos['Activa'])?true:false,
    );
    file_put_contents(DIR_BASE.'datos/c_marcas_bodegas.json',json_encode($marcas));
}
function daoBorrarMarca($id){
    $marcas = daoObtenerMarcas();
    if (isset($marcas[$id])) {
        unset($marcas[$id]);
    }
    file_put_contents(DIR_BASE.'datos/c_marcas_bodegas.json',json_encode($marcas));
}


?>