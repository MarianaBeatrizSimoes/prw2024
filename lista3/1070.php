<?php
$x = intval(fgets(STDIN));
  for($i=$x; $i<($x+12); $i++)
    {
        if($i%2 != 0)
        {
            echo "$i\n";
        }
    }

?>