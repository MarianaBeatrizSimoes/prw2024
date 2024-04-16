<?php
$ndj = intval(trim(fgets(STDIN)));
$saque = 0;
$bloqueio = 0;
$ataque = 0;
$sSp = 0;
$sBp = 0;
$sAp = 0;
$pdj1 = 0;
$pdj2 = 0;
$pdj3 = 0;
while($ndj>0){
    $nome = trim(fgets(STDIN));
    $entrada1 = explode(' ', trim(fgets(STDIN)));
    $saque += $entrada1[0];
    $bloqueio += $entrada1[1];
    $ataque += $entrada1[2];
    $entrada2 = explode(' ', trim(fgets(STDIN)));
    $sSp += $entrada2[0];
    $sBp += $entrada2[1];
    $sAp += $entrada2[2];
    $ndj--;
}
$pdj1 = number_format(($sSp*100)/$saque, 2, ".", "");
$pdj2 = number_format(($sBp*100)/$bloqueio, 2, ".", "");
$pdj3 = number_format(($sAp*100)/$ataque, 2, ".", "");

echo "Pontos de Saque: $pdj1 %." . "\n";
echo "Pontos de Bloqueio: $pdj2 %." . "\n";
echo "Pontos de Ataque: $pdj3 %." . "\n";
?>