<?php

abstract class Organisation
{
    abstract public function Promotion();
    abstract public function eligibleAge();
}
class Student extends Organisation
{
    public $doj;
    public $age;
     public function setDoj($doj){
        $this->doj = $doj;
     }
     public function Promotion()
     {
        echo "No Promotion";
     }
     public function setEligibleAge($age){
        $this->age = $age;
     }
     public function eligibleAge(){
     if($this->age<18){
        echo "not eligible";
     }
     elseif($this->age>18 && $this->doj>12){
        echo "eligible";
     }
     else{
        echo "not eligible";
     }
    }
 

}

class Staff extends Organisation
{
    public $doj;
    public $age;
    public function setDoj($doj){
       $this->doj = $doj;
    }
    public function Promotion()
    {
       echo "No Promotion";
    }
    public function setEligibleAge($age){
        $this->age = $age;
    }
    public function eligibleAge(){
        if($this->age > 40){
            echo"not eligible";
        }
        elseif($this->age > 20 && $this->age <35){
            echo"Eligible for work";

        }
    } 

}

class Employee extends Organisation
{
    public $doj;
    public $age;
public function setDoj($doj){
   $this->doj = $doj;
}
public function Promotion(){
if($this->doj<1){
    echo "No promotion";
}
elseif($this->doj>1 && $this->doj<4){
    echo "Give promotion";
}
else{
    echo "No Promotion";
}
}
    public function setEligibleAge($age){
        $this->age = $age;        
    }
    public function eligibleAge(){
        if($this->age>18 && $this->doj>12){
            echo"Eligible for work";            
        }
        else{
            echo "Not eligible";
        }
    }

}

$student = new student();
$student->setDoj(4);
$student->Promotion($student->doj);
$student->eligibleAge(12);
$student->setEligibleAge($student->age);
echo "\n";

$staff = new staff();
$staff->setDoj(2);
$staff->Promotion($staff->doj);
echo "\n";

$employee = new employee();
$employee->setDoj(3);
$employee->Promotion($employee->doj);
echo "\n";



//method declaration only we implement it in child class only
//abstract class , if you declare abstract class you must me use atleast one abstract alss and more
//