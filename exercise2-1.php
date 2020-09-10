<?php
// 1. calculate factiorial of a number
function fact($num){
    if($num < 0){
        return False;
    }
    $result = 1;
    for($i = $num; $i > 1; $i--){
        $result = $result * $i;
    }
    return $result;
}
function printFact($num){
    $result = fact($num);
    if(is_int($result)){
        echo "$result \n";
    }
    else{
        echo "number can't be negative \n";
    }
}
printFact(5);
printFact(0);
printFact(1);
printFact(-2);
?>