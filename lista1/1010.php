<?php

$prod1 = explode(' ', fgets(STDIN));
$prod2 = explode(' ', fgets(STDIN));

$totalprod1 = $prod1[1] * $prod1[2];
$totalprod2 = $prod2[1] * $prod2[2];

$totalprods = number_format(round($totalprod2 + $totalprod1, 2, PHP_ROUND_HALF_EVEN), 2, '.', '');

echo "VALOR A PAGAR: R$ $totalprods\n";
?>