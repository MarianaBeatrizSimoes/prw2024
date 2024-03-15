<?php
$z=1;
while($z==1)
{
    list($x,$y) = explode( " ", fgets(STDIN));
    if($x>0 && $y>0)
{
        echo "primeiro\n";
}
    if($x<0 && $y>0)
{
        echo "segundo\n";
}
    if($x<0 && $y<0)
{
        echo "terceiro\n";
}
    if($x>0 && $y<0)
{
        echo "quarto\n";
}
    if($x==0 || $y==0)
{
        $z++;
}
}
?>