<?php
// 3. calculator class
class Calculator {
    protected $num1;
    protected $num2;

    public function setNum1($num1){
        $this->num1 = $num1;
    }

    public function setNum2($num2){
        $this->num2 = $num2;
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
        if(!$this->num2){
            throw new Exception('Division by zero.');
        }
        return $this->num1 / $this->num2;
    }
}

$calculator = new Calculator();
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
Can't access class properties directly, it will throw an error!! 
Uncomment, and execute the following codes!
*/
// $calculator->num1;
// $calculator->num2;

/* 
Can't divide by 0, it will throw an exception!!
Uncomment, and execute the following codes!
*/
// $calculator->setNum2(0);
// $calculator->divide();

?>