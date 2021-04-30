<?php

include('a_categorias_tipos.php');
include('b_categorias_uvas.php');
$data = file_get_contents("c_marcas_bodegas.json");
$marcas = json_decode($data, true);

$productos = array(
    '1' => array(
        'id' => 1,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],
        'categotiaUva' => $categorias_uvas[3]['nombre'],
        'marca' => $marcas [3]['Bodegas'],
        'descripcion' => '',
        'activa' => TRUE
    ),
    '2' => array(
        'id' => 2,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => '',
        'categotiaUva' => '',
        'marca' => '',
        'descripcion' => '',
        'activa' => TRUE
    ),
    '3' => array(
        'id' => 3,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => '',
        'categotiaUva' => '',
        'marca' => '',
        'descripcion' => '',
        'activa' => TRUE
    ),
    '4' => array(
        'id' => 4,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => '',
        'categotiaUva' => '',
        'marca' => '',
        'descripcion' => '',
        'activa' => TRUE
    ),
    '5' => array(
        'id' => 5,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => '',
        'categotiaUva' => '',
        'marca' => '',
        'descripcion' => '',
        'activa' => TRUE
    ),
    '6' => array(
        'id' => 6,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => '',
        'categotiaUva' => '',
        'marca' => '',
        'descripcion' => '',
        'activa' => TRUE
    ),
    '7' => array(
        'id' => 7,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => '',
        'categotiaUva' => '',
        'marca' => '',
        'descripcion' => '',
        'activa' => TRUE
    ),
    '8' => array(
        'id' => 8,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => '',
        'categotiaUva' => '',
        'marca' => '',
        'descripcion' => '',
        'activa' => TRUE
    ),
    '9' => array(
        'id' => 9,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => '',
        'categotiaUva' => '',
        'marca' => '',
        'descripcion' => '',
        'activa' => TRUE
    ),
    '10' => array(
        'id' => 10,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => '',
        'categotiaUva' => '',
        'marca' => '',
        'descripcion' => '',
        'activa' => TRUE
    )
);







?>