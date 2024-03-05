<?php
list($a, $b, $c) = array_map('doubleval', explode(' ', fgets(STDIN)));
$delta = ($b*$b) - (4 *$a*$c);
if($a != 0 && $delta>0)
{
    $R1 = (-$b + sqrt($delta))/(2*$a);
    $R2 = (-$b - sqrt($delta))/(2*$a);
    echo "R1 = " . number_format($R1, 5, '.', '') . "\n";
    echo "R2 = " . number_format($R2, 5, '.', '') . "\n";
}
else
{
    echo "Impossivel calcular\n";
}
?>