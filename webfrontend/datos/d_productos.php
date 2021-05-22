<?php

/*
Los productos los sacamos de: http://www.debarricas.com.ar/index.php
*/
include_once('config/config.php');
include('a_categorias_tipos.php');
include('b_categorias_uvas.php');
$data = file_get_contents(DIR_BASE."/datos/c_marcas_bodegas.json");
$marcas = json_decode($data, true);

//foreach($marcas as $marca){ echo $marca['Bodegas']."<br>"; };

$productos = array(
    '1' => array(
        'id' => 1,
        'nombre' => 'LUIGI BOSCA MALBEC DOC',
        'precio' => '1512',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//Tinto
        'categotiaUva' => $categorias_uvas[1]['nombre'],//Malbec
        'marca' => $marcas [98]['Bodegas'],//Luigi Bosca
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/luigi-bosca-malbec-doc-2013_2718_lg.jpg',
        'imagenSM' => 'img/luigi-bosca-malbec-doc-2013_2718_th.jpg',
        'activa' => FALSE,

    ),
    '2' => array(
        'id' => 2,
        'nombre' => 'MALBEC',
        'precio' => '665',
        'contenido' => '750 ml',
        'cosecha' => 'img/',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//Tinto
        'categotiaUva' => $categorias_uvas[1]['nombre'],//Malbec
        'marca' => $marcas [65]['Bodegas'],//Escorihuela Gascon
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/escorihuela-gascon-malbec_7944_lg.png', 
        'imagenSM' => 'img/escorihuela-gascon-malbec_7944_th.png',
        'activa' => FALSE,
 
        
    ),
    '3' => array(
        'id' => 3,
        'nombre' => 'LUIGI BOSCA CABERNET',
        'precio' => '875',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[3]['nombre'],//Cabernet Sauvignon
        'marca' => $marcas [98]['Bodegas'],//Luigi Bosca
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/luigi-bosca-cabernet-750_7384_lg.jpg',
        'imagenSM' => 'img/luigi-bosca-cabernet-750_7384_th.jpg',
        'activa' => TRUE,
 
        
    ),
    '4' => array(
        'id' => 4,
        'nombre' => 'GRAN VU BLEND',
        'precio' => '6000',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[16]['nombre'],//Blend
        'marca' => $marcas [137]['Bodegas'],//Salentein
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/salentein-gran-vu-blend_9390_lg.png',
        'imagenSM' => 'img/salentein-gran-vu-blend_9390_th.png',
        'activa' => TRUE,

        
    ),
    '5' => array(
        'id' => 5,
        'nombre' => 'EL ENEMIGO BONARDA',
        'precio' => '2455',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[2]['nombre'],//Bonarda
        'marca' => $marcas [31]['Bodegas'],//Catena Zapata
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/el-enemigo-bonarda_125_lg.jpg',
        'imagenSM' => 'img/el-enemigo-bonarda_125_th.jpg',
        'activa' => FALSE,

        
    ),
    '6' => array(
        'id' => 6,
        'nombre' => 'MERLOT',
        'precio' => '1560',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[4]['nombre'],//Merlot
        'marca' => $marcas [136]['Bodegas'],//Rutini
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/merlot_438_lg.jpg',
        'imagenSM' => 'img/merlot_438_th.jpg',
        'activa' => FALSE,

        
    ),
    '7' => array(
        'id' => 7,
        'nombre' => 'LUIGI BOSCA CHARDONNAY',
        'precio' => '826',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[1]['nombre'],//blanco
        'categotiaUva' => $categorias_uvas[11]['nombre'],//Chardonnay
        'marca' => $marcas [98]['Bodegas'],//Luigi Bosca
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/luigi-bosca-chardonnay-750_3638_lg.jpg',
        'imagenSM' => 'img/luigi-bosca-chardonnay-750_3638_th.jpg',
        'activa' => FALSE,

        
    ),
    '8' => array(
        'id' => 8,
        'nombre' => 'CHARDONNAY',
        'precio' => '1240',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[1]['nombre'],//blanco
        'categotiaUva' => $categorias_uvas[11]['nombre'],//Chardonnay
        'marca' => $marcas [136]['Bodegas'],//Rutini
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/rutini-chardonnay-750_4105_lg.png',
        'imagenSM' => 'img/rutini-chardonnay-750_4105_th.png',
        'activa' => TRUE,

        
    ),
    '9' => array(
        'id' => 9,
        'nombre' => 'MENDEL SEMILLON',
        'precio' => '952',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[1]['nombre'],//blanco
        'categotiaUva' => $categorias_uvas[10]['nombre'],//Semillón
        'marca' => $marcas [105]['Bodegas'],//Mendel
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/mendel-semillon-750_3980_lg.jpg',
        'imagenSM' => 'img/mendel-semillon-750_3980_th.jpg',
        'activa' => TRUE,

        
    ),
    '10' => array(
        'id' => 10,
        'nombre' => 'GRAN LINAJE TORRONTES',
        'precio' => '656',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[1]['nombre'],//blanco
        'categotiaUva' => $categorias_uvas[12]['nombre'],//Torrontés
        'marca' => $marcas [21]['Bodegas'],//Bodegas Etchart
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/gran-linaje-torrontes-750_2459_lg.jpg',
        'imagenSM' => 'img/gran-linaje-torrontes-750_2459_th.jpg',
        'activa' => FALSE,

        
    ),
    '11' => array(
        'id' => 11,
        'nombre' => 'HUMBERTO CANALE BLUSH',
        'precio' => '300',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[2]['nombre'],//rosado
        'categotiaUva' => $categorias_uvas[1]['nombre'],//Malbec
        'marca' => $marcas [82]['Bodegas'],//Humberto Canale
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/humberto-canale-blush_4610_lg.jpg',
        'imagenSM' => 'img/humberto-canale-blush_4610_th.jpg',
        'activa' => FALSE,

        
    ),
    '12' => array(
        'id' => 12,
        'nombre' => 'PADRILLOS ROSADO',
        'precio' => '493',
        'contenido' => '750 ml',
        'cosecha' => 'img/',
        'categotiaTipo' => $categorias_tipos[2]['nombre'],//rosado
        'categotiaUva' => $categorias_uvas[1]['nombre'],//Malbec
        'marca' => $marcas [64]['Bodegas'],//Ernesto Cateba
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'img/padrillos-rosado_175_lg.jpg',
        'imagenSM' => 'img/padrillos-rosado_175_th.jpg',
        'activa' => FALSE,

    
    )
);

/*Prueva
foreach ($productos as $producto) {
    echo '<pre>';
    print_r($producto);
    echo '</pre>';
}
*/
?>