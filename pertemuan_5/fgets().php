<?php
$file = fopen("buah.txt","r");

echo fgets($file);
fclose($file);
?>