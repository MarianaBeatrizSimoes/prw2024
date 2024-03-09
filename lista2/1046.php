<?php
list($Ho, $Hf) = array_map('intval', explode(' ', fgets(STDIN)));
$temptotal = 0;
if($Ho >= $Hf)
{
    $temptotal = (24 + $Hf) - $Ho;
}
else
{
    $temptotal = ($Hf - $Ho);
}
echo "O JOGO DUROU $temptotal HORA(S)\n";
?>
