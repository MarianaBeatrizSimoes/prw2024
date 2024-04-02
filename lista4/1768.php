<?php

while (fscanf(STDIN, "%d", $n) === 1) {
    $metade_superior = ($n + 1) / 2;
    for ($i = 1; $i <= $metade_superior; $i++) {
        echo str_repeat(" ", $metade_superior - $i) . str_repeat("*", 2 * $i - 1) . "\n";
    }
    echo str_repeat(" ", $metade_superior - 1) . "*\n";
    echo str_repeat(" ", $metade_superior -2) . "***\n";
    echo "\n";
}
?>
