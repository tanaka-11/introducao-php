<?php
// Exemplo 4 - Condicional

/* Protótipo de ChatBOT */
echo PHP_EOL."-- ChatBOT da empresa Tanakeira -- \n";
echo PHP_EOL."Opções válidas: ";
echo PHP_EOL."1 - Informação";
echo PHP_EOL."2 - Reclamação";
echo PHP_EOL."3 - Elogios";
echo PHP_EOL."4 - Status \n";

echo PHP_EOL;
$opcao = readline("Digite a opção desejada: ");

// Condicional Encadeada
if($opcao == 1){
	$resultado = "Legal, o que deseja saber?";	
} elseif ($opcao == 2){
	$resultado = "Puxa, que pena... conte-me o que houve.";
} elseif ($opcao == 3){
	$resultado = "Pode falar :)";
} elseif ($opcao == 4){
	$resultado = "Um momento enquanto verifico";
} else {
	$resultado = "Não entendi, tente novamente.";
}

// Saida de dados
echo PHP_EOL.$resultado;

// if - se 
// else - senão
// elseif - senão se	