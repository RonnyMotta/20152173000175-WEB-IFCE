<?php

$SALARIO = $_GET['SALARIO'];

$VENDAS = $_GET['VENDAS'];

$CONTA1 = $VENDAS * 0.04;
$CONTA2 = $SALARIO + $CONTA1;

$COMISSAO = number_format($CONTA1);
$SALARIOFINAL = number_format($CONTA2);

echo "sua comissao é: " .$COMISSAO ;
echo "salario final é: " .$SALARIOFINAL;



?>