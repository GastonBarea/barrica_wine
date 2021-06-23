<?php
include_once(DIR_BASE.'DAO/categoriasTipoDao.php');

function businessObtenerCategoriaTipo(){
return daoObtenerCategoriasTipo();
}


function businessGuardarCategoriasTipo($datos = array()){
    daoGuardarCategoriasTipos($datos);
  }


  function businessModificarCategoriaTipo($datos = array(), $id){
    daoModificarCategoriaTipo($datos, $id);
  /*  if(!empty($_FILES)){
      if(is_dir(DIR_BASE.'images/'.$id)){
        mkdir(DIR_BASE.'images/'.$id);
      }
  
      move_uploaded_file($FILES['tmp_name'],DIR_BASE.'images/'.$id.'/'.$FILES['name']);
      $datos['imagenLG'] = $FILES['name']
    }
    var_dump($_FILES); die();*/
  
  }

  function businessBorrarCategoriaTipo($id){
    daoBorrarCategoriaTipo($id);
    }

?>