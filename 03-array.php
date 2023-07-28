<?php 
// Exemplo 3 - Arrays
/* Objetivo: como declarar, atribuir e acessar dados de vetores*/

// Declaração de arrays é opcional.
$pessoas = []; //ou $pessoas = array()

// Processo de atribuição de dados:
$pessoas[0] = readline ("Informe a 1º pessoa: ");
$pessoas[1] = readline ("Informe a 2º pessoa: ");
$pessoas[2] = readline ("Informe a 3º pessoa: ");


// Saida de Dados
/* Lembrete: (/n) ou (PHP_EOL.) - serve como quebra de linha dentro da string */
echo PHP_EOL."1º Pessoa: ".$pessoas[0];
echo PHP_EOL."2º Pessoa: ".$pessoas[1];
echo PHP_EOL."3º Pessoa: ".$pessoas[2];


 