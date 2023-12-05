<?php
abstract class bike{
    public $name;
    public $model;
    public $stock;


    function __construct($name,$model,$stock){
        $this->n=$name;
        $this->m=$model;
        $this->s=$stock;
    }

abstract function get();
}

class tvs extends bike{
    function get(){
        echo "bike name is:{$this->n}<br>bike model is:{$this->m}<br>
        bike stock is {$this->s}<br><br>";
    }
}

class honda extends bike{
    function get(){
        echo "bike name is:{$this->n}<br>bike model is:{$this->m}<br>
        bike stock is {$this->s}<br>";
    }
}

$b1=new tvs("pro",2012,5);
$b1->get();

$b2=new honda("activa",2012,4);
$b2->get();
?>