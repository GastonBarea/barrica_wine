<?php

$fp = fopen("archivo.txt","r+");

for($i=0;$i<10;$i++){
    fseek($fp,10);
    fwrite($fp,"zzzz ".$i."\n",5);
}
fclose($fp);
?>