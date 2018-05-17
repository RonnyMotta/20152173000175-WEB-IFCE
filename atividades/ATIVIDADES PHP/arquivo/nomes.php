<?php
$nome1 = $_GET['nome1'];
$nome2 = $_GET['nome2'];
$nome3 = $_GET['nome3'];
$nome4 = $_GET['nome4'];
$nome5 = $_GET['nome5'];
$name = 'arquivo.txt';
$text = $nome1;
$text1 = $nome2;
$text2 = $nome3;
$text3 = $nome4;
$text4 = $nome5;
$file = fopen($name, 'a');

 fwrite($file, $text);
 "<br>";
fwrite($file, $text1);
fwrite($file, $text2);
fwrite($file, $text3);
fwrite($file, $text4);
fclose($file);

$fp = fopen("arquivo.txt", "r");
while (!feof($fp)){
	$char = fgets($fp);
}
fclose($fp);
echo $char."<br><br>";
?>