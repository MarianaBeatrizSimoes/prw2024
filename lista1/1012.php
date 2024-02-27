<?php
list($a, $b, $c) = array_map('floatval', explode(' ', fgets(STDIN)));
$pi = 3.14159;
$areatriangulo = ($a * $c)/2;
$areacirculo = $pi * pow($c,2);
$areatrapezio = ($a + $b) * $c/2;
$areaquadrado = pow($b,2);
$arearetangulo = $a * $b;
echo "TRIANGULO: " . number_format($areatriangulo, 3, '.', '') . PHP_EOL;
echo "CIRCULO: " . number_format($areacirculo, 3, '.', '') . PHP_EOL;
echo "TRAPEZIO: " . number_format($areatrapezio, 3, '.', '') . PHP_EOL;
echo "QUADRADO: " . number_format($areaquadrado, 3, '.', '') . PHP_EOL;
echo "RETANGULO: " . number_format($arearetangulo, 3, '.', '') . PHP_EOL;
?>