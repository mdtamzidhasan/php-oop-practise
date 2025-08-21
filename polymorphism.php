method overriding (runtime polymorphism)
method overloading (compile-time polymorphism)


<?php
class Animal {
    public function sound(){
        return "some sound";
    }
}



class Dog extends Animal {
    public function sound(){
        return "Bark";
    }
}


class Cat extends Animal {
    public function sound(){
        return "Meow";
    }
}


$dog = new Dog();
echo $dog->sound(); // Outputs: Bark    
$cat = new Cat();
echo $cat->sound(); // Outputs: Meow