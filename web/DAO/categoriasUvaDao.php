<?php
function daoObtenerCategoriasUva(){
if (file_exists(DIR_BASE.'datos/uvas.json')){
    $catsUvas = json_decode(file_get_contents(DIR_BASE.'datos/uvas.json'),true);
}
else{
    $catsUvas = array();
}
return $catsUvas;
}
?>