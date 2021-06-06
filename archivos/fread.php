<?php

$fp = fopen("archivo.txt","r+");
while(!feof($fp)){

    echo str_replace("\n","<br />", fgets($fp,100));
    echo 'f';

}



fclose($fp);
?>