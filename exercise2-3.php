<?php
// 3. calculator class
class Calculator {
    protected $num1;
    protected $num2;


    public function __construct($num1, $num2){
        if((is_int($num1) || is_float($num1)) && (is_int($num2) || is_float($num2))){
            $this->num1 = $num1;
            $this->num2 = $num2;
        }
        else{
            throw new Exception('Invalid input');
        }
    }

    public function setNum1($num1){
        if(is_int($num1) || is_float($num1)){
            $this->num1 = $num1;
        }
        else{
            throw new Exception('Invalid input');
        }
    }

    public function setNum2($num2){
        if(is_int($num2) || is_float($num2)){
            $this->num2 = $num2;
        }
        else{
            throw new Exception('Invalid input');
        }
    }

    public function getNum1(){
        return $this->num1;
    }

    public function getNum2(){
        return $this->num2;
    }

    public function add(){
        return $this->num1 + $this->num2;
    }

    public function multiply(){
        return $this->num1 * $this->num2;
    }

    public function divide(){
        if($this->num2 === 0){
            throw new Exception('Division by zero.');
        }
        return $this->num1 / $this->num2;
    }
}

$calculator = new Calculator(7, 8);
echo $calculator->getNum1();
echo "\n";
echo $calculator->getNum2();
echo "\n";
echo $calculator->add();
echo "\n";
echo $calculator->multiply();
echo "\n";
echo $calculator->divide();
echo "\n \n";
$calculator->setNum1(5);
$calculator->setNum2(2);
echo $calculator->getNum1();
echo "\n";
echo $calculator->getNum2();
echo "\n";
echo $calculator->add();
echo "\n";
echo $calculator->multiply();
echo "\n";
echo $calculator->divide();
echo "\n";

/* 
Invalid input values, will throw an exception!!
Uncomment and try to change the type of input in the object!
*/
//$calculator1 = new Calculator(1, "s");
//$calculator->setNum1("s");
//$calculator->setNum2("s");

/* 
Can't access class properties directly, it will throw an error!! 
Uncomment, and execute the following codes!
*/
// $calculator->num1;
// $calculator->num2;

/* 
Can't divide by 0, it will throw an exception!!
Uncomment, and execute the following codes!
*/
//$calculator->setNum2(0);
//$calculator->divide();

?>