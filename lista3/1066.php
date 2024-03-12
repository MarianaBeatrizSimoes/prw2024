<?php
$contadorpar = 0;
$contadorimpar= 0;
$contadormais = 0;
$contadormenos = 0;
for($i= 0; $i<5; $i++)
{
    $num = intval(fgets(STDIN));
    if($num%2==0)
    {
        $contadorpar= $contadorpar + 1;
    }
    if($num%2!=0)
    {
        $contadorimpar= $contadorimpar + 1;
    }
   
    if($num>0)
    {
        $contadormais= $contadormais + 1;
    }
    if($num<0)
    {
        $contadormenos = $contadormenos + 1;
    }
}
echo "$contadorpar valor(es) par(es)\n";
echo "$contadorimpar valor(es) impar(es)\n";
echo "$contadormais valor(es) positivo(s)\n";
echo "$contadormenos valor(es) negativo(s)\n";
?>