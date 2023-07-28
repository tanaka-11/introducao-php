<?php
// Exercicio 1 - Calculando media de faltas.

// Entrada
$uc = readline("Informe sua UC: ");
$cargaHoraria = readline("Informe a carga horaria: ");

// Processamento
$limitedeFaltas = $cargaHoraria / 4;

// Saida
echo PHP_EOL."Seu limite de faltas é de ".$limitedeFaltas." horas na UC".$uc.", com a carga horária de ".$cargaHoraria." horas.";

echo PHP_EOL;

echo "UC :".$uc.PHP_EOL;
echo "Carga Horária:".$cargaHoraria." horas.".PHP_EOL;
echo "Limite de Faltas:".$limitedeFaltas." horas.";