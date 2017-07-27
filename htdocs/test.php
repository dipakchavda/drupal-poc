<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);

class Shape {
    
    private $height = 10;
    private $width  = 20;
    
    public function __construct() {
        $this->height = 10.00;
        $this->width  = 10.00;
    }
    
    /**
     * Set height
     * @param $height double
     * 
     */
    public function setHeight($height) {
        $this->height = $height;
    }
    /**
     * Set Width
     * @param $width double
     * 
     */
    public function setWidth($width) {
        $this->width = $width;
    }
    // Get
    /**
     * Get height
     * @return $height double
     * 
     */
    public function getHeight() {
        return $this->height;
    }
    /**
     * Get Width
     * @return $width double
     * 
     */
    public function getWidth() {
        return $this->width;
    }
    
    public function calcArea() {
        return $this->height * $this->width;
    }
    
    public function __destruct() {
        echo "Object removed";
    }
}

class Circle extends Shape {
    
    private $radius;
    private $pivalue = 3.1416;
    
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    
    public function getRadius() {
        return $this->radius;
    }
    
    public function calcArea() {
        return $this->pivalue * pow($this->radius, 2);
    }
    
}

$shape = new Circle();
#$shape->setHeight(12.00);
#$shape->setWidth(10.00);
$shape->setRadius(10);
echo $shape->calcArea();
var_dump($shape);