<?php
    list($Hro, $Mino, $Hrf, $Minf) = array_map('intval', explode(' ', fgets(STDIN)));
    $temphora = 0;
    $tempmin = 0;
    if($Hro>=$Hrf)
    {
        $temphora = (24 + $Hrf) - $Hro;
    }
    else
    {
         $temphora = $Hrf - $Hro;
    }
    
    if($Mino > $Minf )
    {
        $temphora = $temphora -1;
        $tempmin = (60 - $Mino) + $Minf;
    }
    else
    {
        $tempmin = $Minf - $Mino;
    }
    if($temphora >= 24 && $tempmin > 0){
        $temphora = 0;
    }
    echo "O JOGO DUROU $temphora HORA(S) E $tempmin MINUTO(S)\n";
?>

