<?php
$contador = 0;
$sum = 0;
number_format($media, 1, '.', '');
for($i= 1; $i<=6; $i++)
{
    $num = floatval(fgets(STDIN));
    if($num>0)
    {
        $sum = $sum + $num;
        $contador= $contador + 1;
    }
}
$media = $sum/$contador;
echo "$contador valores positivos\n";
echo round($media, 1, PHP_ROUND_HALF_UP).PHP_EOL;
?>