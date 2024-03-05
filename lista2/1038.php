<?php
list($cod, $quant) = array_map('intval', explode(' ', fgets(STDIN)));
if($cod==1)
{
    $valor= $quant*4.00;
}
elseif($cod==2)
{
    $valor= $quant*4.50;
}
elseif($cod==3)
{
    $valor= $quant*5.00;
}
elseif($cod==4)
{
    $valor= $quant*2.00;
}
elseif($cod==5)
{
    $valor = $quant*1.50;
}
echo "Total: R$ " . number_format($valor, 2, '.', ' ') . PHP_EOL;
?>