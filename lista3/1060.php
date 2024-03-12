<?php
$contador = 0;
for($i= 1; $i<=6; $i++)
{
    $num = floatval(fgets(STDIN));
    if($num>0)
    {
        $contador= $contador + 1;
    }
}
echo "$contador valores positivos\n";
?>