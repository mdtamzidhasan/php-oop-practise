<?php
class Car {
    public $brand;

    public function __construct($brand){
        $this->brand = $brand;

    }

    public function drive(){
        return "Driving {$this->brand} car";
    }
    
    
}
$car = new Car("Toyota");
echo $car->drive();
?>