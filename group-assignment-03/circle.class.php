<?php

/**
 * Represents a circle
 */
class Circle extends Shape {
    private $origin; // A Vector object
    private $radius;

    /**
     * Constructor function
     *
     * @param Vector $origin the origin Vector
     * @param number $radius the radius of the Circle
     */
    public function __construct($origin, $radius, $color) {
        $this->setOrigin($origin);
        $this->setRadius($radius);
        $this->setColor($color);
    }

    /**
     * Returns the origin Vector of the circle
     */
    public function getOrigin() {
        return $this->origin;
    }

    /**
     * Sets the origin Vector of the circle
     */
    public function setOrigin($origin) {
        if ($origin instanceof Vector) {
            $this->origin = $origin;
        }
        else { throw new InvalidArgumentException(); }
    }

    /**
     * Returns the radius of the circle
     */
    public function getRadius() {
        return $this->radius;
    }

    /**
     * Sets the radius of the circle
     */
    public function setRadius($radius) {
        if (is_numeric($radius) && $radius >= 0) {
            $this->radius = $radius;
        }
        else { throw new InvalidArgumentException(); }
    }

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

    /**
     * Returns the circumference of the circle
     */
    public function getPerimeter() {
        return $this->getCircumference();
    }
}
?>
