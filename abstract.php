<?php
abstract class Shape {
    abstract public function area();
    
}

class Circle extends Shape {
    private $redius;
    
    public function __constuct($redius){
        $this->redius = $redius;
        
    }
    public function area(){
        return pi()*$this->redius*$this->redius;
    }
}

$circle = new Circle(5);
echo $circle->area();