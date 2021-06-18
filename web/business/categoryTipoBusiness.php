<?php
include_once(DIR_BASE.'DAO/categoriasTipoDao.php');
function businessGuardarTipo($datos = array()){
  daoGuardarTipo($datos);
}
function businessObtenerTipos(){
return daoObtenerTipos();
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