<?php
// 1. calculate factiorial of a number
function fact($num){
    $result = 1;
    for($i = $num; $i > 1; $i--){
        $result = $result * $i;
    }
    return $result;
}
echo fact(5);
echo "\n";
echo fact(0);
echo "\n";
echo fact(1);
echo "\n";
?>