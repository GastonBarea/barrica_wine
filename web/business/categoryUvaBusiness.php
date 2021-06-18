<?php
include_once(DIR_BASE.'DAO/categoriasUvaDao.php');
function businessGuardarUva($datos = array()){
  daoGuardarUva($datos);
}
function businessObtenerUvas(){
return daoObtenerUvas();
}
function businessObtenerUva($id){
    return daoObtenerUva($id);
}
function businessModificarUva($datos = array(), $id){
daoModificarUva($datos, $id);
}
function businessBorrarUva($id){
daoBorrarUva($id);
}
?>