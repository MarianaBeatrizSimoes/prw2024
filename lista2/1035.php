<?php
list($a, $b, $c, $d) = array_map('intval', explode(' ', fgets(STDIN)));

if($b > $c && $d > $a && ($c + $d) > ($a + $b) && $c>0 && $d>0 && fmod($a, 2 )==0)
{
    echo "Valores aceitos\n";
}
else
{
    echo "Valores nao aceitos\n";
}
?>