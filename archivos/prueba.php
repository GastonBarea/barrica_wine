<?php
include_once('config.php');
$categorias_uvas_j = file_get_contents(DIR_BASE.'archivos/uvas.json');
$categorias_uvas = json_decode($categorias_uvas_j, true);

var_dump($categorias_uvas, true);

?>