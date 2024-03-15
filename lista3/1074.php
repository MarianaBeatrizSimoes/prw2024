<?php
$n = intval(fgets(STDIN));
for($i=0; $i<$n; $i++)
{
    $valor=intval(fgets(STDIN));
    if($valor%2 ==0 && $valor>0)
{
        echo "EVEN POSITIVE\n";
}
	if($valor%2 ==0 && $valor<0)
{
        echo "EVEN NEGATIVE\n";
}
    if($valor%2 !=0 && $valor>0)
{
        echo "ODD POSITIVE\n";
}
    if($valor%2 !=0 && $valor<0)
{
        echo "ODD NEGATIVE\n";
}
    if($valor==0)
{
        echo "NULL\n";
}
}
?>