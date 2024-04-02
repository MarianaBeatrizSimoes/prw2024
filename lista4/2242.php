<?php
$r = readline();
$r = preg_replace("/[^aeiou]/", "", $r);
$n = strlen($r);
$x = 0;
for ($i = 0; $i < $n / 2; $i++) {
    if ($r[$i] != $r[$n - $i - 1]) { 
        echo "N\n";
        exit; 
    }
}
echo "S\n";
?>