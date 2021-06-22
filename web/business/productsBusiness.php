<?php
include_once(DIR_BASE.'DAO/productosDao.php');
include_once(DIR_BASE.'helpers/image.php');


function businessGuardarProductos($datos = array()){
  
  $id = daoGuardarProductos($datos);
  if(!empty($_FILES['imagen'])){
     saveImage($_FILES['imagen'],$id);
   }

  }

function businessObtenerProductos(){
return daoObtenerProductos();
}

function businessObtenerProducto($id){
    return daoObtenerProducto($id);
}

function businessModificarProducto($datos = array(), $id){

  daoModificarProducto($datos, $id);
    if(!empty($_FILES['imagen'])){
      saveImage($_FILES['imagen'],$id);
    }


}

function saveImage($datos,$id){
    $ruta = DIR_BASE.'img/'.$id.'/';
  if(!is_dir($ruta)){
    mkdir($ruta);
  }
  $tamanhos = array(0 => array('nombre'=>'big','ancho'=>'800','alto'=>'800'),
  	                1 => array('nombre'=>'small','ancho'=>'400','alto'=>'400'));

  redimensionar($ruta,$datos['name'],$datos['tmp_name'],0,$tamanhos);
 
}


function businessBorrarProducto($id){
daoBorrarProducto($id);
}
?>