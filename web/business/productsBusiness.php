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
  //ini_set('upload_max_filesize','3M');/*Cambia los balores del php*/
  //ini_set('upload_max_size','10M');/*Cambia los balores del php*/
  //ini_set('memory_size','128M');/*Cambia los balores del php*/
  //(';extension=gd','extension=gd');/*Da click en el botón de 'Config' de 'Apache', y seleccionar 'PHP (php.ini)*/
    $ruta = DIR_BASE.'img/'.$id.'/';
  if(!is_dir($ruta)){
    mkdir($ruta);
  }
  $tamanhos = array(0 => array('nombre'=>'big','ancho'=>'800','alto'=>'800'),
  	                1 => array('nombre'=>'small','ancho'=>'400','alto'=>'400'));
  if (is_array($datos['name'])) {
    $cantidadImg = cant_imagenes($ruta);
    foreach ($datos['name'] as $index => $name) {
    redimensionar($ruta,$datos['name'][$index],$datos['tmp_name'][$index],$index+$cantidadImg,$tamanhos);
    }
  }else {
    redimensionar($ruta,$datos['name'],$datos['tmp_name'],cant_imagenes($ruta),$tamanhos);
  }

 
}

function businessObtenerImagenesProducto($id){

  return obtener_imagenes('img/'.$id.'/');
  
}

function businessBorrarProducto($id){
daoBorrarProducto($id);
}
?>