<?php

/**
 * Represents a circle
 */
class Circle extends Shape {
    private $radius;
    private $origin; // vector object

    /**
     * Returns the area of the circle
     */
    public function getArea() {
        return M_PI * $this->radius ** 2;
    }

    /**
     * Returns the circumference of the circle
     */
    public function getCircumference() {
        return 2 * M_PI * $this->radius;
    }
}
?>
