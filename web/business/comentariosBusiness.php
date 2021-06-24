<?php
include_once(DIR_BASE.'/DAO/comentariosDao.php');
function businessGuardarComentarios($datos = array()){
  daoGuardarComentarios($datos);
}
function businessObtenerComentarios(){
return daoObtenerComentarios();
}
function businessObtenerComentario($id){
    return daoObtenerComentario($id);
}
function businessModificarComentario($datos = array(), $id){
daoModificarComentario($datos, $id);
}
function businessBorrarComentario($id){
daoBorrarComentario($id);
}
?>