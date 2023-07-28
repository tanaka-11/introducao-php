<?php 
// Exercicio 2 - Refatoração do exemplo 2.

echo PHP_EOL."-- ChatBOT da empresa Tanakeira -- \n";
echo PHP_EOL."Opções válidas: ";
echo PHP_EOL."1 - Informação";
echo PHP_EOL."2 - Reclamação";
echo PHP_EOL."3 - Elogios";
echo PHP_EOL."4 - Status \n";

echo PHP_EOL;
$opcao = readline("Digite a opção desejada: ");

// Usando o Switch/Case
switch($opcao){
 case 1: $resultado = "Legal, o que deseja saber?"; break;	
 
 case 2:
	$resultado = "Puxa, que pena... conte-me o que houve.";
 break;	
 
 case 3:
	$resultado = "Pode falar :)";
 break;	
 
 case 4:
	$resultado = "Um momento enquanto verifico...";
 break;	

 default:
	$resultado = "Não entendi, tente novamente.";
 break;
}
// Saida de dados
echo PHP_EOL.$resultado;