<?php

include('a_categorias_tipos.php');
include('b_categorias_uvas.php');
//$data = file_get_contents("c_marcas_bodegas.json");
//$marcas = json_decode($data, true);

$productos = array(
    '1' => array(
        'id' => 1,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[12]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '2' => array(
        'id' => 2,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[11]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '3' => array(
        'id' => 3,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[10]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '4' => array(
        'id' => 4,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[9]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '5' => array(
        'id' => 5,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[8]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '6' => array(
        'id' => 6,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[3]['nombre'],//tinto
        'categotiaUva' => $categorias_uvas[7]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '7' => array(
        'id' => 7,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[1]['nombre'],//blanco
        'categotiaUva' => $categorias_uvas[6]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '8' => array(
        'id' => 8,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[1]['nombre'],//blanco
        'categotiaUva' => $categorias_uvas[5]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '9' => array(
        'id' => 9,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[1]['nombre'],//blanco
        'categotiaUva' => $categorias_uvas[4]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '10' => array(
        'id' => 10,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[1]['nombre'],//blanco
        'categotiaUva' => $categorias_uvas[3]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '11' => array(
        'id' => 11,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[2]['nombre'],//rosado
        'categotiaUva' => $categorias_uvas[2]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    ),
    '12' => array(
        'id' => 12,
        'nombre' => 'Vino Otoñal',
        'precio' => '1500',
        'cosecha' => '2011',
        'categotiaTipo' => $categorias_tipos[2]['nombre'],//rosado
        'categotiaUva' => $categorias_uvas[1]['nombre'],
        //'marca' => $marcas [3]['Bodegas'],
        'descripcion' => 'De una cuidadosa elección',
        'activa' => TRUE
    )
);

/*Prueba
foreach ($productos as $producto) {
    echo '<pre>';
    print_r($producto);
    echo '</pre>';
}
*/
?>