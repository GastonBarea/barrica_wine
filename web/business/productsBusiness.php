<?php
include_once(DIR_BASE.'DAO/productosDao.php');
function businessGuardarProductos($datos = array()){
  daoGuardarProductos($datos);
}
function businessObtenerProductos(){
return daoObtenerProductos();
}
function businessObtenerProducto($id){
    return daoObtenerProducto($id);
}
function businessModificarProducto($datos = array(), $id){
  daoModificarProducto($datos, $id);
/*  if(!empty($_FILES)){
    if(is_dir(DIR_BASE.'images/'.$id)){
      mkdir(DIR_BASE.'images/'.$id);
    }

    move_uploaded_file($FILES['tmp_name'],DIR_BASE.'images/'.$id.'/'.$FILES['name']);
    $datos['imagenLG'] = $FILES['name']
  }
  var_dump($_FILES); die();*/

}
function businessBorrarProducto($id){
daoBorrarProducto($id);
}
?>