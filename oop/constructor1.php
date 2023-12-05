<?php
class person{
    public $name;
    public $dept;

    function __construct($name,$dept){
$this->n=$name;
$this->d=$dept;


    }
    function __destruct(){
    echo "person name is {$this->n}<br>
    dept name is {$this->d}<br><br>";
    }

}
$p1=new person("jay","computer");
$p2=new person("harsh","php");

?>