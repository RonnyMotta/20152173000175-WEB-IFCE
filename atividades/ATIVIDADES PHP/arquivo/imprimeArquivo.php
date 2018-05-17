

<?php
$fp = fopen("arquivo.txt", "r");
while (!feof($fp)){
	$char = fgets($fp);
}
fclose($fp);
echo $char."<br><br>";
?>