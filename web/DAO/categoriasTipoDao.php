<?php
function daoObtenerCategoriasTipo(){
if (file_exists(DIR_BASE.'datos/tipos.json')){
    $catsTipos = json_decode(file_get_contents(DIR_BASE.'datos/tipos.json'),true);
}
else{
    $catsTipos = array();
}
return $catsTipos;
}
?>