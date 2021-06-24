<?php
include_once(DIR_BASE.'DAO/categoriasUvaDao.php');

function businessObtenerUvas(){
return daoObtenerCategoriasUva();
}
function businessGuardarUva($datos = array()){
    daoGuardarUva($datos);
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