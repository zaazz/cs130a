<?php

/**
 * Represents a rectangle
 */
class Rectangle extends Shape {
    private $length;
    private $width;
    private $origin; // A Vector object for the upper-left corner
    
    /**
     * Constructor for a Rectangle
     *
     * @param Vector $origin the origin of the rectangle (upper-left corner)
     * @param number $length the length of the rectangle
     * @param number $width the width of the rectangle
     */
    public function __construct($origin, $length, $width) {

        // TODO : validate with setters
        $this->origin = $origin;
        $this->length = $length;
        $this->width = $width;
    }

    /**
     * Returns the area of the Rectangle
     */
    public function getArea() {
        return $this->length * $this->width;
    }

    /**
     * Returns the perimeter of the Rectangle
     */
    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

?>
