<?php

$handle = fopen ("/Users/linuxska/Desktop/SistemaBibilotecaIPE/ab.txt", "r");
while (!feof($handle)) {
    $buffer = fgets($handle, 4096);
    if (file_exists(rtrim($filename,"\n"))) {
        echo $buffer;
    } else {
        echo $buffer." has been removed.";
}
fclose ($handle);


?>