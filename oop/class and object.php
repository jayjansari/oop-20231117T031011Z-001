<?php
class car{
    public $company;
    public $model;
    function set($company,$model){
        $this->c=$company;
        $this->m=$model;
    }

    function get(){
        echo $this->c, $this->m;
        echo "<br>";
        echo "<br>";

    }
}

$honda=new car();
$honda->set("city",200000);
$honda->get();

$kia=new car();
$kia->set("jack",500);
$kia->get();

?>