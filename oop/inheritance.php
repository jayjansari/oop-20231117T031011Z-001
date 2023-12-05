<?php
class bike{
    public $name;
    public $model;

    function __construct($name,$model,$stock,$avg,$range){
        $this->n=$name;
        $this->m=$model;
        $this->s=$stock;
        $this->a=$avg;
        $this->r=$range;




    }

    function get(){
        echo "bike name {$this->n} <br> bike model {$this->m}
        <br> bike stock {$this->s}<br> bike avg{$this->a}<br>
        luna range{$this->r}<br>";
    }
}

class honda extends bike{
    public $stock;
}

class tvs extends bike{
    public $avg;
}

class luna extends bike{
    public $range;
    
}
$b1=new bike("hero",2012,4,65,120);
$b1->get();

$b2=new honda ("honda",2023,4,55,80);
$b2->get();

$b3=new tvs("tvs",2019,10,45,89);
$b3->get();

$b4=new luna("luna",2012,20,41,45);
$b4->get();


?>