<?php
$contador = 0;
for($i= 0; $i<5; $i++)
{
    $num = floatval(fgets(STDIN));
    if($num%2==0)
    {
        $contador= $contador + 1;
    }
}
echo "$contador valores pares\n";
?>