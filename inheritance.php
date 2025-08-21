<?php
class Vehicle {
    public function start(){
        return "starting the vehicle";
    }
    
}
    
 class Bike extends Vehicle{
    public function ride(){
            return "riding the bike";
     }
}


$bike = new Bike();
echo $bike->start();
echo $bike->ride();
?>