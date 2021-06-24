<?php
include_once(DIR_BASE.'DAO/categoriasTipoDao.php');

function businessObtenerTipos(){
return daoObtenerCategoriasTipo();
}
function businessGuardarTipo($datos = array()){
    daoGuardarTipo($datos);
}
function businessObtenerTipo($id){
return daoObtenerTipo($id);
}
function businessModificarTipo($datos = array(), $id){
daoModificarTipo($datos, $id);
}
function businessBorrarTipo($id){
daoBorrarTipo($id);
}
?>