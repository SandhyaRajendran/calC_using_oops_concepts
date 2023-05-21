<?php

class validation
{
  public $a;
  public $b;

  public function __construct($a,$b)
  {
   $this->a=$a;
   $this->b=$b;
  }

  public function validate()
  {
    return (is_int($this->a)&&is_int($this->b));
  }
}



class calculator extends validation
{
 public function add()
 {
  if($this->validate())
  {
   return $this->a+$this->b;
  }
   return "please enter correct value";
 }
}
$arr = [];
$Calculator = new calculator(5,1);
$his = array($Calculator->add());
// array_push($his,$arr);
// print_r ($arr);
echo $his;