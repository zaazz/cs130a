<?php

/**
 * Represents a rectangle
 */
class Rectangle extends Shape {
    private $width;
    private $height;
    private $origin; // A Vector object for the upper-left corner
    
    /**
     * Constructor for a Rectangle
     *
     * @param Vector $origin the origin of the rectangle (upper-left corner)
     * @param number $width the width of the rectangle
     * @param number $height the height of the rectangle
     */
    public function __construct($origin, $width, $height) {

        // TODO : validate with setters
        $this->origin = $origin;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Returns the area of the Rectangle
     */
    public function getArea() {
        return $this->width * $this->height;
    }

    /**
     * Returns the perimeter of the Rectangle
     */
    public function getPerimeter() {
        return 2 * $this->width + 2 * $this->height;
    }
}

?>
