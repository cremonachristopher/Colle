<?php
function colle ($x, $y) {
    $x = 5;
    $y = "a";
    echo str_repeat($y, $x). PHP_EOL;
    
    for ($i=0; $i < $x - 2; $i++) { 
        echo $y .str_repeat(' ',$x - 2) . $y . PHP_EOL;
    }
    echo str_repeat($y, $x). PHP_EOL;
    
}
colle ("x", "y")
?>