<?php
$O=0;
while($O==0){
    list($m, $n) = explode (' ', readline());
    if($m !=0 || $n!=0){
        $R = $m+$n;
        $m = $str = str_replace("0", "", $R);
        echo $m. "\n";
    }
    else{
        $O=1;
    }
}
?>