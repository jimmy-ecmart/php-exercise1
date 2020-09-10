<?php
// 2. reverse a string
function reverse($str){
    $s = '';
    for($i = strlen($str) - 1; $i >= 0; $i--){
        $s .= $str[$i]; 
    }
    return $s;
}
echo reverse("apple");
echo "\n";
echo reverse("a");
echo "\n";
?>