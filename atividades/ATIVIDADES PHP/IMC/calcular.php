<?php
$altura = $_GET["altura"];
$peso = $_GET["peso"];

$imc = $peso / ($altura * $altura);

if ($imc < 16){
$msg = "MAGREZA GRAVE!";


}elseif (($imc >= 16)  &&($imc < 17)){
$msg = "MAGREZA MODERADA";


}elseif (($imc >= 17)&&($imc < 18.5)){
$msg = "MAGREZA LEVE";


}elseif (($imc >= 18.5)  &&($imc <25)){
$msg = "SAUDÁVEL";


}elseif (($imc >= 25)  &&($imc < 30)){
$msg = "SOBREPESO";


}elseif ($imc >= 30){
$msg = "Obesidade ";

}

 echo $imc;
echo $msg;
 $img;