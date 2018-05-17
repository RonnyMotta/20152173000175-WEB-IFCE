<?php
$name = 'arquivo.txt';
$text = 'Olá';
$text1 = 'Bom';
$text2 = 'Dia';
$file = fopen($name, 'a');

fwrite($file, $text);
fwrite($file, $text1);
fwrite($file, $text2);
fclose($file);
?>