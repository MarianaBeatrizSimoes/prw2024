<?php
$x=1;
$Inter=0;
$Empate=0;
$Gremio=0;
while($x==1){
echo "Novo grenal (1-sim 2-nao)\n";
list($x, $y)=explode(" ", fgets(STDIN));
if($x>$y)
{
    $Inter++;
}
elseif($x<$y)
{
    $Gremio++;
}
elseif($x==$y)
{
    $Empate++;
}
$quant++;
$x= fgets(STDIN);
}
echo "$quant grenais\n";
echo "Inter:$Inter\n";
echo "Gremio:$Gremio\n";
echo "Empates:$Empate\n";
if($Inter>$Gremio){
    echo "Inter venceu mais\n";
}

if($Gremio>$Inter){
    echo "Gremio venceu mais\n";
}

?>