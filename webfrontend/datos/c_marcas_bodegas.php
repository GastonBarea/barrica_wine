<?php


$data = file_get_contents("c_marcas_bodegas.json");
$marcas = json_decode($data, true);
 
foreach ($marcas as $marca) {
    echo '<pre>';
    print_r($marca);
    echo '</pre>';
}


?>
