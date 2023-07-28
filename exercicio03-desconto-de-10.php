<?php 
// Exercicio 3 - Refatoração do exercicio 6 (Operador E)

echo PHP_EOL;
$produto = readline("Qual seu produto?:\n");
$preco = readline("Qual preço?: R$\n");

if ($preco >= 1000 && $preco <= 1500) {
   echo "Seu preço é de R$".$preco." e você terá um desconto de 10%."; 	
} else {
   echo "Seu preço é de R$".$preco." e você terá um desconto de 5%.";
}

