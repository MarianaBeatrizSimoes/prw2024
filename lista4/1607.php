<?php
$t = intval(fgets(STDIN));
for($i=0; $i<$t; $i++){
    $strs = explode(" ", trim(fgets(STDIN)));
    $str1 = $strs[0];
    $str2 = $strs[1];
    $n = strlen($str1);
    $min_ops = 0;
    for($l = 0; $l<$n; $l++){
        $diff = ord($str2[$l]) - ord($str1[$l]);
        if($diff<0){
            $diff+=26;
        }
        $min_ops +=$diff;
    }
    echo $min_ops . PHP_EOL;
}
?>
