<?php
list($n1, $n2, $n3, $n4) = array_map('floatval', explode(' ', fgets(STDIN)));
$media = (($n1*2) + ($n2*3) + ($n3*4) + ($n4*1))/10;
$media = intval($media * 10);
$media = $media / 10;
$media = number_format($media, 1, '.', ' ');
if($media>=7.0)
{
    echo "Media: ".$media."\n";
    echo "Aluno aprovado.\n";
}
elseif($media<5.0)
{
    echo "Media: ".$media."\n";
    echo "Aluno reprovado.\n";
}
else
{
    
    $notaex = floatval(fgets(STDIN));
    
    $mediafinal = ($media + $notaex)/2;
    if($mediafinal>=5.0)
    {
        echo "Media: ".$media."\n";
        echo "Aluno em exame.\n";
        echo "Nota do exame: ". number_format($notaex, 1, '.', ' ')."\n";
        echo "Aluno aprovado.\n";
        echo "Media final: " . number_format($mediafinal, 1, '.', ' ') . PHP_EOL;

    }
    elseif($mediafinal<=4.9)
    {
        echo "Aluno reprovado\n";
        echo "Media final: " . number_format($mediafinal, 1, '.', ' ') . PHP_EOL;

    }
}
?>