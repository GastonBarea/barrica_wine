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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//luigi-bosca-malbec-doc-2013_2718_lg.jpg
        'imagenSM' => '',//luigi-bosca-malbec-doc-2013_2718_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 120,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
    ),
    '2' => array(
        'id' => 2,
        'nombre' => 'MALBEC',
        'precio' => '665',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//Tinto
        'categotiaUva' => $categorias_uvas[1]['nombre'],//Malbec
        'marca' => $marcas [65]['Bodegas'],//Escorihuela Gascon
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//escorihuela-gascon-malbec_7944_lg.png 
        'imagenSM' => '',//escorihuela-gascon-malbec_7944_th.png
        'activa' => TRUE,
        'favoritoLike' => 315,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//luigi-bosca-cabernet-750_7384_lg.jpg
        'imagenSM' => '',//luigi-bosca-cabernet-750_7384_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 211,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//salentein-gran-vu-blend_9390_lg.png
        'imagenSM' => '',//salentein-gran-vu-blend_9390_th.png
        'activa' => TRUE,
        'favoritoLike' => 123,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//el-enemigo-bonarda_125_lg.jpg
        'imagenSM' => '',//el-enemigo-bonarda_125_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 10,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//merlot_438_lg.jpg
        'imagenSM' => '',//merlot_438_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 25,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//luigi-bosca-chardonnay-750_3638_lg.jpg
        'imagenSM' => '',//luigi-bosca-chardonnay-750_3638_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 33,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//rutini-chardonnay-750_4105_lg.jpg
        'imagenSM' => '',//rutini-chardonnay-750_4105_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 45,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//mendel-semillon-750_3980_lg.jpg
        'imagenSM' => '',//mendel-semillon-750_3980_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 98,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//gran-linaje-torrontes-750_2459_lg.jpg
        'imagenSM' => '',//gran-linaje-torrontes-750_2459_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 188,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
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
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//humberto-canale-blush_4610_lg.jpg
        'imagenSM' => '',//humberto-canale-blush_4610_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 95,
        'comentarios' => array('idUsuario' =>'', 'comentario' => ''),
    ),
    '12' => array(
        'id' => 12,
        'nombre' => 'PADRILLOS ROSADO',
        'precio' => '493',
        'contenido' => '750 ml',
        'cosecha' => '',
        'categotiaTipo' => $categorias_tipos[2]['nombre'],//rosado
        'categotiaUva' => $categorias_uvas[1]['nombre'],//Malbec
        'marca' => $marcas [64]['Bodegas'],//Ernesto Cateba
        'descripcion' => 'De una cuidadosa elección',
        'imagenLG' => 'https://fakeimg.pl/350x200/?text=World&font=lobster',//padrillos-rosado_175_lg.jpg
        'imagenSM' => '',//padrillos-rosado_175_th.jpg
        'activa' => TRUE,
        'favoritoLike' => 62,
        'comentarios' => array('idUsuario' =>'', 'comentario' => '')
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