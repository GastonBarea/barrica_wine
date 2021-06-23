<?php
include_once(DIR_BASE.'DAO/categoriasUvaDao.php');

function businessObtenerCategoriaUva(){
return daoObtenerCategoriasUva();
}


function businessGuardarCategoriasUva($datos = array()){
    daoGuardarCategoriasUvas($datos);
  }


  function businessModificarCategoriaUva($datos = array(), $id){
    daoModificarCategoriaUva($datos, $id);
  /*  if(!empty($_FILES)){
      if(is_dir(DIR_BASE.'images/'.$id)){
        mkdir(DIR_BASE.'images/'.$id);
      }
  
      move_uploaded_file($FILES['tmp_name'],DIR_BASE.'images/'.$id.'/'.$FILES['name']);
      $datos['imagenLG'] = $FILES['name']
    }
    var_dump($_FILES); die();*/
  
  }

  function businessBorrarCategoriaUva($id){
    daoBorrarCategoriaUva($id);
    }

?>