<?php
list($Hro, $Mino, $Hrf, $Minf) = array_map('intval', explode(' ', fgets(STDIN)));
$temphora = 0;
$tempmin = 0;
if($Hro>=$Hrf && $Mino>=$Minf)
{
    $temphora = (24 + $Hrf) - $Hro;
    $tempmin = (60 -$Mino) + $Minf;
}
else
{
    $temphora = $Hrf - $Hro;
    $tempmin = $Minf - $Mino;
}
echo "O JOGO DUROU $temphora HORA(S) E $tempmin MINUTO(S)\n";
?>
