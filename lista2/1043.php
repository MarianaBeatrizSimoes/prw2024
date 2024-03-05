<?php
list($A, $B, $C) = array_map('floatval', explode(' ', fgets(STDIN)));
if($A<$B+$C && $B<$A+$C && $C<$A+$B)
{
    $Perimetro = $A + $B +$C;
    echo "Perimetro = " . number_format($Perimetro, 1, '.', ' ') . PHP_EOL;
}
else
{
    $Area = (($A+$B)*$C)/2;
    echo "Area = " . number_format($Area, 1, '.', ' ') . PHP_EOL;
}
?>