<?php
$n = intval(fgets(STDIN));
for($i=1; $i<=10;$i++){
    echo "$i x $n = ".$n*$i.PHP_EOL;
}
?>