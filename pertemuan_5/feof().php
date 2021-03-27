<?php
$file = fopen("buah.txt","r");
while(! feof($file))
    {
    echo fgets($file). "<br />";
    }
fclose($file);
?>