<?php
$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));
$soma = 0;
 if($x<$y)
 {
    for($i=$x+1; $i<$y; $i++)
    {
        if($i%2!=0)
        {
            $soma = $soma + $i;
        }
    }
 }
 else
 {
    for($i=$y+1; $i<$x; $i++)
    {
        if($i%2!=0)
        {
            $soma = $soma + $i;
        }
    }
 }
 echo "$soma\n";
?>