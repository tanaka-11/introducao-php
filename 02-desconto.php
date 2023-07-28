<?php
// 02-calculo-de-desconto

// Entrada

// Versão 1:
//echo "Informe seu produto: ";
//$produto = readline();

// Versão 2:
$produto = readline("Informe o produto: ");
$precoInicial = readline("Informe o preço: ");
$desconto = readline("Desconto em reais: ");

// Processo
$precoFinal = $precoInicial - $desconto; 

// Saida
echo PHP_EOL."Preço final: ".$precoFinal;