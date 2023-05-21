<?php
class maths
{
    // public $number1 = 6;
    // public $number2 = 4;
    public function add($number1 , $number2){
        return $number1+$number2."\n";
    }
    public function minus($number1 , $number2){
        return $number1-$number2."\n";
    }
    public function divide($number1 , $number2){
        return $number1/$number2."\n";
    }
    public function multiply($number1 , $number2){
        return $number1*$number2."\n";
    }
}

$class = new maths();
echo $class->add(3,4);
echo $class->minus(7,2);
echo $class->divide(7,2);
echo $class->multiply(7,2);





