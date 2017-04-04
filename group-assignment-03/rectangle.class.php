<?php

/**
 * Represents a rectangle
 */
class Rectangle extends Shape {
    private $width;
    private $height;
    private $vertices; // an array of Vector objects
    
    /**
     * Returns the area of the Rectangle
     */
    public function getArea() {
        return $this->width * $this->height;
    }
    
    /**
     * Returns the circumference of the Rectangle
     */
    public function getCircumference() {
        return 2 * $this->width + 2 * $this->height;
    }
}

?>
