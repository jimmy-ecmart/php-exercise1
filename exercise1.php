<?php
echo "\n";
echo "Author: Jimmy Cheng \n \n";

// 1. 6 * 6 multiplication table
echo("1. \n");
for($i = 1; $i <= 6; $i++){
    for($j = 1; $j <= 6; $j++){
        $string = $i * $j;
        echo "$string ";
    }
    echo "\n";
}
echo "\n";

// 2. find first non-repeated character in a string
echo("2. \n");
function findDup($str){
    $arr = array();
    for($i = 0; $i < strlen($str); $i++){
        if(substr_count($str, $str[$i]) === 1){
            $s = $str[$i];
            return $s;
        }
    }
    return False;
}
// helper function
function printDup($str){
    $dup = findDup($str);
    if($dup){
        echo "$dup \n";
    }
    else{
        echo "False \n";
    }
}
printDup('Green');
printDup('abcdea');
printDup('aabb');
echo "\n";

// 3. return true if all values in an array is positive
echo("3. \n");
function allPostive($arr){
    foreach ($arr as $value) {
        if($value < 0){
            return False;
        }
    }
    return True;
}
// helper function
function printPositive($arr){
    $is_positive = allPostive($arr);
    if($is_positive){
        echo "True \n";
    }
    else{
        echo "False \n";
    }
}
printPositive([2, 3, 4, 5]);
printPositive([-1, 9, -4, 5]);
echo "\n";

// 4. return the last even number in an array
echo("4. \n");
function findEven($arr){
    $even = "False";
    foreach ($arr as $value) {
        if($value % 2 === 0){
            $even = $value;
        }
    }
    return $even;
}
// helper function
function printEven($arr){
    $s = findEven($arr);
    if($s === False){
        echo "False \n";
    }
    else {
        echo "$s \n";
    }
}
printEven([3,5,2,9,7,8,10,1]);
printEven([3,5]);
echo "\n";

// 5 . print capital of cities
echo("5. \n");
$cities = array("Taiwan"=>"台北", "Japan"=>"東京", "China"=> "北京", "Korea"=>"Seoul", "France" => "巴黎");
foreach ($cities as $key => $value) {
    echo "The capital of $key is $value \n";
}
echo "\n";

// 6. insert an element in a specific position of an array
echo("6. \n");
function insertArr($arr, $index){
    array_splice($arr, $index + 1, 0, array('$'));
    return $arr;
}
print_r(insertArr([1, 2, 3, 4, 5], 2));
echo "\n";

// 7. print reversed equilateral triangle 
echo "7.\n";
function printTrig($n){
    for($i = 1; $i <= $n; $i++){
        echo str_repeat("*", $i);
        echo "\n";
    }
    for($i = $n; $i >= 1; $i--){
        echo str_repeat("*", $i);
        echo "\n";
    }
}
printTrig(5);
echo"\n";

// 8. find first occurrence of different character in two strings
echo "8. \n";
function strDiff($str1, $str2){
    for($i = 0; $i < strlen($str1); $i++){
        if($str1[$i] !== $str2[$i]){
            echo "Index {$i}: {$str1[$i]} vs {$str2[$i]} \n";
            return;
        }
    }
    echo "Two strings are identical \n";
    return;
}
strDiff("football", "footboll");
strDiff("football", "football");
echo "\n";

// 9. print a-z
echo "9.\n";
$s = 'a';
for ($n = 0; $n < 26; $n++) {
    echo $s++;
}
echo "\n";
?>