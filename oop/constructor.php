<?php
class employee{
    public $name;
    public $salary;
    public $designation;


function __construct($name,$salary,$designation){

    $this->n=$name;
    $this->s=$salary;
    $this->d=$designation;



    
}
function __destruct()
{
    echo "employee name is {$this->n} <br> employee salary is {$this->s} <br> employe e designation is  {$this->d} ";
}

}

$e1=new employee("jay",5000,"sales");

?>