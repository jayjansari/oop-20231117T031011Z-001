<?php
class marksheet{
    public $studentname;
    public $id;
    public $mathsmark;
    public $sciencemark;
    public $englishmark;

    function __construct($studentname,$id,$mathsmark,$sciencemark,$englishmark){
        $this->s=$studentname;
        $this->i=$id;
        $this->m=$mathsmark;
        $this->ci=$sciencemark;
        $this->e=$englishmark;
        $this->t=$mathsmark+$sciencemark+$englishmark;
        $this->p=$mathsmark+$sciencemark+$englishmark/3;

    }

    function get(){
        echo "student name is {$this->s} <br> student id is {$this->i}<br>
        student maths mark is {$this->m} <br> student science mark is {$this->ci}<br> student english mark is {$this->e}<br>
        total mark is {$this->t}<br>
        total pr is {$this->p}<br>";

        if($this->p<90){
            echo "pass";
            echo "<br><br>";
        }

        else{
            echo "fail";
            echo "<br><br>";
        }
    
    }


}

$s1=new marksheet("jay",1,5,10,15);
$s1->get();

$s2=new marksheet("harsh",2,48,52,85);
$s2->get();

$s3=new marksheet("mayur",3,52,65,78);
$s3->get();

$s4=new marksheet("nikhilsir",4,92,91,94);
$s4->get();

$s5=new marksheet("kaushalsir",5,99,96,97);
$s5->get();

?>