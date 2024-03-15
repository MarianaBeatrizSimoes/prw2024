<?php
$maior=0;
$posicao = 0;
for($i=1; $i<=100; $i++)
{
    $n=intval(fgets(STDIN));
    if($maior<$n)
{
        $maior=$n;
        $posicao=$i;
}
}
echo "$maior\n";
echo "$posicao\n";
?>