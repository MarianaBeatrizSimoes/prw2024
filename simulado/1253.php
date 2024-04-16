<?php
$n = intval(readline());
for($i=0;$n>$i;$i++){
    $cifra = readline();
    $x = intval(readline());
    for($z=0;strlen($cifra)>$z; $z++){
        if((ord($cifra[$z])- $x)>=65){
            $cifra[$z] = chr(ord($cifra[$z]) - $x);
        }
        else{
            $cifra[$z] =  chr(ord($cifra[$z]) + (26-$x));
        }
    }
    echo $cifra.PHP_EOL;
}
?>