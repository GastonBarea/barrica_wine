<?php
include_once(DIR_BASE.'DAO/marcasDao.php');

function businessObtenerMarcas(){
return daoObtenerMarcas();
}
function businessGuardarMarca($datos = array()){
    daoGuardarMarca($datos);
}
function businessObtenerMarca($id){
return daoObtenerMarca($id);
}
function businessModificarMarca($datos = array(), $id){
daoModificarMarca($datos, $id);
}
function businessBorrarMarca($id){
daoBorrarMarca($id);
}
?>