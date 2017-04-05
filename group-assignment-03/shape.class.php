<?php

/**
 * Represents a shape
 */
abstract class Shape {
    private $color;

    /**
     * Returns the area of the shape
     */
    abstract public function getArea();

    /**
     * Returns the perimeter of the shape
     */
    abstract public function getPerimeter();

    /**
     * Returns the color of of the shape
     */
    public final function getColor() {
        return $this->color;
    }

    /**
     * Sets the color of of the shape
     */
    public final function setColor($color) {
        $this->color = $color;
    }
}

?>
