<?php
include_once('config/config.php');

$comentarios = json_decode(file_get_contents(DIR_BASE.'datos/comentarios.json'),true);

var_dump($comentarios);

echo '<br/>'.'-----------------------------------------------------------------------'.'<br/>';


//echo $comentarios['20210610033455000000']["fecha"];
//
//echo $comentarios($id);


echo $comentarios['20210610033455000000']["fecha"];


?>