<?php 
 
$y = 25;
 
function addition() { 
    $x = 75;
    $GLOBALS['p'] = $x + $GLOBALS['y']; 
    $GLOBALS['s'] = $x;
}
 
addition(); 
echo $p . $s; 
?>