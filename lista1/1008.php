<?php
$numerofuncionario = fgets(STDIN);
$horastrabalhadas = fgets(STDIN);
$valorporhora = round(fgets(STDIN), 2);

$salario = number_format($horastrabalhadas * $valorporhora, '2', '.', '');
echo "NUMBER = $numerofuncionario";
echo "SALARY = U$ $salario" . PHP_EOL;

?>