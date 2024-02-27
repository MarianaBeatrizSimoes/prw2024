<?php
    $pi = 3.14159;
    $raio = fgets(STDIN);
    $area = $pi * pow($raio,2);
    echo "A=" . number_format($area,4,'.','') . PHP_EOL;
?>