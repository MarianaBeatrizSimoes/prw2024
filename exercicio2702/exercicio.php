<?php
  $nome = $_GET['nome'];  
  $idade = $_GET['idade'];  
  $salario = $_GET['salario'];
  $INSS = 0;
  $IRPF = 0;
  
  if($salario >= 0.01 and $salario <= 1412)
  {
    $INSS = $salario/100*7.5;
  }
  if($salario >= 1412 and $salario <= 2666.68)
  {
    $INSS = $salario/100*9.0;
  }
  if($salario >= 2666.68 and $salario <= 4000.04)
  {
    $INSS = $salario/100*12.0;
  }
  if($salario >= 4000.04 and $salario <= 7786.02)
  {
    $INSS = $salario/100*14.0;
  }
  if($salario >= 0.01 and $salario <=2112.00 and $idade < 65)
  {
    $IRPF = 0;
  }
  if($salario >= 2112.00 and $salario <= 2866.65 and $idade < 65)
  {
    $IRPF = ($salario-$INSS) * 0.075 - 169.44;
  }
  if($salario >= 2826.66 and $salario <= 3751.05 and $idade < 65)
  {
    $IRPF = ($salario-$INSS) * 0.15 - 381.44;
  }
  if($salario >= 3751.06  and $salario <= 4664.68 and $idade < 65)
  {
    $IRPF = ($salario-$INSS) * 0.225 - 662.77;
  }
  if($salario >= 4664.68 and $idade < 65)
  {
    $IRPF = ($salario-$INSS) * 0.275 - 896.00;
  }

  $Liq = $salario - $INSS - $IRPF;
  echo "Cliente.".$nome."seu salário bruto é de ".$salario." você pagará R$: ".number_format($INSS, 2, '.', ''). "de INSS e R$".number_format($IRPF, 2, '.', ''). "de IRPF".PHP_EOL;
