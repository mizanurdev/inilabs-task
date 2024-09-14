<?php
class Animal {
    public function makeSound() {
        return "Greetings";
    }
}
class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}
class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}
class Human extends Animal {
    public function makeSound() {
        return "Hello";
    }
}
// Demonstrating polymorphism
function makeAnimalSound(Animal $animal) {
    echo $animal->makeSound() . "\n";
}

$dog = new Dog();
$cat = new Cat();
$human = new Human();

makeAnimalSound($dog); 
makeAnimalSound($cat); 
makeAnimalSound($human);