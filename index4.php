<?php

class validate
{
    public $a;
    public $b;
    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
        
    }
    public function validation()
    {
        return(is_int($this->$a) && is_int($this->$b));
    }

}

class Calculator extends validate
{
    
    public function add():int|string
    {
        if($this->validation()){
            return $this->a+$this->b;
        }
        else{
            return "the input is not a integer";
        }

    }
}

$calculator = new calculator();
$calculator->add(2,3);