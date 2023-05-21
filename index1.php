<?php

class maths
{
    public $number1;
    public $number2;

    public function __construct($number1,$number2)
    {
        $this->number1= $number1;
        $this->number2= $number2;

        echo $this->add()."\n";
        echo $this->minus()."\n";
        echo $this->divide()."\n";
    }

    public function add(): int
    {
        return $this->number1 + $this->number2."\n";
    }

    public function minus(): int
    {
        return $this->number1 - $this->number2."\n";
    }

    public function divide(): float
    {
        return round($this->number1 / $this->number2,2)."\n";
    }
}


new maths(100,12);
echo "\n";
new maths(12,12);
echo "\n";
new maths(34,12);
echo "\n";
new maths(45,12);