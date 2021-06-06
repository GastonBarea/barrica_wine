<?php

$fp = fopen("archivo.txt","w+");

for($i=0;$i<10;$i++){
    fwrite($fp,"linea ".$i."\n");
}
fclose($fp);
?>