<?php

$fp = fopen("archivo.csv","r");
while(!feof($fp)){

    $datos[] = fgetcsv($fp,100);
    echo '<br />';

}
var_dump($datos);



fclose($fp);
?>