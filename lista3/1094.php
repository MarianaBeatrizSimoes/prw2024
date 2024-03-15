<?php
$n = intval(readline());
for($i=0; $i<$n; $i++){
    list($x, $y) = explode(' ', readline());
    $total+=$x;
    if($y=="C"){
        $nC+=$x;
    }
    if($y=="R"){
        $nR+=$x;
    }
    if($y=="S"){
        $nS+=$x;
    }
}
$pC=number_format($nC*100/$total, 2, ".", "");
$pR=number_format($nR*100/$total, 2, ".", "");
$pS=number_format($nS*100/$total, 2, ".", "");
echo "Total: $total cobaias\n";
echo "Total de coelhos: $nC\n";
echo "Total de ratos: $nR\n";
echo "Total de sapos: $nS\n";
echo "Percentual de coelhos: $pC %\n";
echo "Percentual de ratos: $pR %\n";
echo "Percentual de sapos: $pS %\n";
?>