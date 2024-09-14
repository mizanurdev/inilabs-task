<?php
class Shape {
    public function calculateArea() {
        return 0;
    }
}
// Circle class extends Shape
class Circle extends Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);  // Area of circle = π * r^2
    }
}

// Rectangle class extends Shape
class Rectangle extends Shape {
    private $width;
    private $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea() {
        return $this->width * $this->height;  // Area of rectangle = width * height
    }
}

$circle = new Circle(5);  // Create a circle with radius 5
echo "Area of the circle: " . $circle->calculateArea() . "\n";

$rectangle = new Rectangle(3, 4);  // Create a rectangle with width 3 and height 4
echo "Area of the rectangle: " . $rectangle->calculateArea() . "\n";

