<?php
list($X, $Y, $Z) = array_map('floatval', explode(' ', fgets(STDIN)));
if($X>=$Y && $X>=$Z)
{
    $A = $X;
    $B = $Y;
    $C = $Z;
}
if($Y>=$X && $Y>=$Z)
{
    $A = $Y;
    $B = $X;
    $C = $Z;
}
if($Z>=$X && $Z>=$Y)
{
    $A = $Z;
    $B = $X;
    $C = $Y;
}
if($A>=($B+$C))
{
    echo "NAO FORMA TRIANGULO\n";
}
elseif($A*$A==($B*$B+$C*$C))
{
    echo "TRIANGULO RETANGULO\n";
}
elseif($A*$A>($B*$B+$C*$C))
{
    echo "TRIANGULO OBTUSANGULO\n";
}
elseif($A*$A<($B*$B+$C*$C))
{
    echo "TRIANGULO ACUTANGULO\n";
}
if($A==$B && $B==$C)
{
    echo "TRIANGULO EQUILATERO\n";
}
elseif($A==$B ||$A==$C || $B==$C)
{
    echo "TRIANGULO ISOSCELES\n";
}
?>