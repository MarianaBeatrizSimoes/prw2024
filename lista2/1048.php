<?php
$funcionariosalario = floatval(fgets(STDIN));
$funcionarionovosalario = 0;
$x = 0;
if ($funcionariosalario >= 0 && $funcionariosalario <= 400.00){
    $x = 15;
    $funcionarionovosalario = $funcionariosalario + ($funcionariosalario * ($x/100));
}
elseif ($funcionariosalario >= 400.01 && $funcionariosalario <= 800.00){
    $x = 12;
    $funcionarionovosalario = $funcionariosalario + ($funcionariosalario * ($x/100));
}
elseif ($funcionariosalario >= 800.01 && $funcionariosalario <= 1200.00){
    $x = 10;
    $funcionarionovosalario = $funcionariosalario + ($funcionariosalario * ($x/100));}
elseif ($funcionariosalario >= 1200.01 && $funcionariosalario <= 2000.00){
    $x = 7;
    $funcionarionovosalario = $funcionariosalario + ($funcionariosalario * ($x/100));
}
else{
    $x = 4;
    $funcionarionovosalario = $funcionariosalario + ($funcionariosalario * ($x/100));
}

$funcionarionovosalario = number_format($funcionarionovosalario, 2, '.', "");
$dinheiroganho = $funcionarionovosalario - $funcionariosalario;
$dinheiroganho = number_format($dinheiroganho, 2, '.', "");
echo "Novo salario: $funcionarionovosalario\n";
echo "Reajuste ganho: $dinheiroganho\n";
echo "Em percentual: $x %\n";
?>