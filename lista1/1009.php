<?php

$nomevendedor = fgets(STDIN);
$salariofixo = fgets(STDIN);
$vendames = fgets(STDIN);

$salariofinal = number_format(round($salariofixo + ($vendames * 0.15), 2, PHP_ROUND_HALF_EVEN), 2, '.', '');
echo "TOTAL = R$ $salariofinal\n";

?>