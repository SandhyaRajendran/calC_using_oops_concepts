<?php
class organisation
{

    public $employeename;
    public $employeeage;
    
    public function employeename($employeename){
        $this->employeename=$employeename;
    }
    public function employeeage($employeeage){
        $this->employeeage=$employeeage;
    }

    public function getinfo(){
        echo "employeename".$this->employeename;
        echo "\n";
        echo "employeeage".$this->employeeage;
    }

}

class employee1 extends organisation
{

   
}

$employee1 = new employee1();
$employee1->employeename('shiva');
$employee1->employeeage(20);
$employee1->getinfo();
echo "\n";
echo "\n";
echo "\n";


class employee2 extends organisation
{

   
}

$employee2 = new employee2();
$employee2->employeename('sandhya');
$employee2->employeeage(21);
$employee2->getinfo();
echo "\n";
echo "\n";
echo "\n";


class employee3 extends organisation
{

   
}

$employee3 = new employee3();
$employee3->employeename('rehan');
$employee3->employeeage(30);
$employee3->getinfo();
echo "\n";
echo "\n";
echo "\n";



class employee4 extends organisation
{

   
}

$employee4 = new employee4();
$employee4->employeename('moni');
$employee4->employeeage(18);
$employee4->getinfo();
echo "\n";
echo "\n";
echo "\n";

/////////////////////////////////////////////////////
<?php
class organisations
{

    public $employeename;
    public $employeeage;
    public $organisation;
    
    public function employeename($employeename){
        $this->employeename=$employeename;
    }
    public function employeeage($employeeage){
        $this->employeeage=$employeeage;
    }
    public function organisation($organisation){
        $this->organisation = $organisation;
    }

    public function getinfo(){
        echo "employeename".$this->employeename;
        echo "\n";
        echo "employeeage".$this->employeeage;
        echo "\n";
        echo "organisation".$this->organisation; 
    }

}

class employee1 extends organisations
{

   
}

$employee1 = new employee1();
$employee1->employeename('shiva');
$employee1->employeeage(20);
$employee1->organisation("dckap");


$employee1->getinfo();
echo "\n";
echo "\n";
echo "\n";


class employee2 extends organisations
{

   
}

$employee2 = new employee2();
$employee2->employeename('sandhya');
$employee2->employeeage(21);
$employee2->getinfo();
$employee2->organisation("dckap");

echo "\n";
echo "\n";
echo "\n";


class employee3 extends organisations
{

   
}

$employee3 = new employee3();
$employee3->employeename('rehan');
$employee3->employeeage(30);
$employee3->getinfo();
$employee3->organisation("dckap");

echo "\n";
echo "\n";
echo "\n";



class employee4 extends organisations
{

   
}

$employee4 = new employee4();
$employee4->employeename('moni');
$employee4->employeeage(18);
$employee4->getinfo();
$employee4->organisation("dckap");
echo "\n";
echo "\n";
echo "\n";


//////////////////////////////////////
<?php
class organisation extends employee1
{
    public $organisation;
    
    public function organisation($organisation){
        $this->organisation = $organisation;
    }
}

class employee1
{

    public $employeename;
    public $employeeage;

    public function setemployeename($employeename){
        $this->employeename=$employeename;
    }
    public function setemployeeage($employeeage){
        $this->employeeage=$employeeage;
    }
    public function getinfo(){
        echo "employeename".$this->employeename;
        echo "\n";
        echo "employeeage".$this->employeeage;
        echo "\n";
        echo "organisation".$this->organisation; 
    }
   
}

$organisation = new organisation();
$organisation->setemployeename('shiva');
$organisation->setemployeeage(20);
$organisation->organisation("dckap");

$organisation->getinfo();
echo "\n";
echo "\n";
echo "\n";


class organisation1 extends employee1
{
    public $organisation;
    
    public function organisation($organisation){
        $this->organisation = $organisation;
    }
}

$organisation1 = new organisation1();
$organisation1->setemployeename('shiva');
$organisation1->setemployeeage(20);
$organisation1->organisation("dckap");

$organisation1->getinfo();
echo "\n";
echo "\n";
echo "\n";

class organisation2 extends employee1
{
    public $organisation;
    
    public function organisation($organisation){
        $this->organisation = $organisation;
    }
}

$organisation2 = new organisation2();
$organisation2->setemployeename('sandy');
$organisation2->setemployeeage(20);
$organisation2->organisation("dckap");

$organisation2->getinfo();
echo "\n";
echo "\n";
echo "\n";

class organisation3 extends employee1
{
    public $organisation;
    
    public function organisation($organisation){
        $this->organisation = $organisation;
    }
}

$organisation3 = new organisation3();
$organisation3->setemployeename('rehan');
$organisation3->setemployeeage(20);
$organisation3->organisation("dckap");

$organisation3->getinfo();
echo "\n";
echo "\n";
echo "\n";


class organisation4 extends employee1
{
    public $organisation;
    
    public function organisation($organisation){
        $this->organisation = $organisation;
    }
}

$organisation4 = new organisation();
$organisation4->setemployeename('moni');
$organisation4->setemployeeage(20);
$organisation4->organisation("dckap");

$organisation4->getinfo();
echo "\n";
echo "\n";
echo "\n";

//////////////////////////////////////
<?php


abstract class Organisation
{
    abstract public function Promotion();
}
class student extends Organisation
{
     public $doj;
     public function Setdoj($doj){
        $this->doj = $doj;
     }
     public function Promotion()
     {
        echo "No Promotion";
     } 
}

class Staff extends Organisation
{
    public $doj;
    public function Setdoj($doj){
       $this->doj = $doj;
    }
    public function Promotion()
    {
       echo "No Promotion";
    } 

}

class Employee 
{
    public $doj;
public function Setdoj($doj){
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

}

$student = new student();
$student->Setdoj(4);
$student->Promotion($student->doj);
echo "\n";

$staff = new staff();
$staff->Setdoj(2);
$staff->Promotion($staff->doj);
echo "\n";

$employee = new employee();
$employee->Setdoj(3);
$employee->Promotion($employee->doj);
echo "\n";



////////////////////////////////////////////
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
$student->setEligibleAge($student->age)
echo "\n";

$staff = new staff();
$staff->setDoj(2);
$staff->Promotion($staff->doj);
echo "\n";

$employee = new employee();
$employee->setDoj(3);
$employee->Promotion($employee->doj);
echo "\n";




