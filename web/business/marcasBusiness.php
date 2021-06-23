<?php
include_once(DIR_BASE.'DAO/MarcasDao.php');

function businessObtenerMarcas(){
return daoObtenerMarcas();
}


function businessGuardarMarcas($datos = array()){
    daoGuardarMarcas($datos);
  }


  function businessModificarMarca($datos = array(), $id){
    daoModificarMarca($datos, $id);
  /*  if(!empty($_FILES)){
      if(is_dir(DIR_BASE.'images/'.$id)){
        mkdir(DIR_BASE.'images/'.$id);
      }
  
      move_uploaded_file($FILES['tmp_name'],DIR_BASE.'images/'.$id.'/'.$FILES['name']);
      $datos['imagenLG'] = $FILES['name']
    }
    var_dump($_FILES); die();*/
  
  }

  function businessBorrarMarca($id){
    daoBorrarMarca($id);
    }

?>