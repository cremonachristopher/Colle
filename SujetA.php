<?php
function colle ($x, $y) {
    $x = 5;
    $y = 5;

    for ($i=0; $i < $y; $i++) {
        if ($i=== 0) {
            echo "o";
        } else {
                echo "-";
        }
     }        
        for ($j=0; $j < $x; $j++) { 
                if ($j === 0) {
                    echo "o";
                }
            else {
                echo "|";
            }
        }
   
echo PHP_EOL;    
}
colle ("x", "y")
?>