<?php
function daoObtenerMarcas(){
if (file_exists(DIR_BASE.'datos/c_marcas_bodegas.json')){
    $catMarcas = json_decode(file_get_contents(DIR_BASE.'datos/c_marcas_bodegas.json'),true);
}
else{
    $catMarcas = array();
}
return $catMarcas;
}
?>