
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

