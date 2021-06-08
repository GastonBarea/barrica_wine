<?php

$fp = fopen("archivo.csv","a+");

$datos = array(
    '1' => array('c',2,3,4,5),
    '2' => array('a',2,3,4,5),
    '3' => array('b',2,3,4,5),
);
foreach($datos as $data){

    fputcsv($fp,$data);

}
?>