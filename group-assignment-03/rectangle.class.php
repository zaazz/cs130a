<?php
include_once('../printable.php');


/**
 * Represents a rectangle
 */
class Rectangle extends Shape {
    private $origin; // A Vector object for the upper-left corner
    private $length;
    private $width;
    

    /**
     * Constructor for a Rectangle
     *
     * @param Vector $origin the origin of the rectangle (upper-left corner)
     * @param number $length the length of the rectangle
     * @param number $width  the width of the rectangle
     *
     * @throws InvalidArgumentException
     */
    public function __construct($origin, $length, $width, $color) {
        $this->setOrigin($origin);
        $this->setLength($length);
        $this->setWidth($width);
        parent::setColor($color);
    }

    /**
     * Getter for the origin (top-left corner) of the Rectangle
     *
     * @return Vector origin of the Rectangle
     */
    public function getOrigin() {
        return $this->origin;
    }
    
    /**
     * Setter for the origin (top-left corner) of the Rectangle
     *
     * @param Vector origin of the Rectangle
     *
     * @throws InvalidArgumentException
     */
    public function setOrigin($origin) {
        if ($origin instanceof Vector) {
            $this->origin = $origin;
        }
        else { throw new InvalidArgumentException(); }
    }

    /**
     * Getter for the length of the Rectangle
     *
     * @return number length of the Rectangle
     */
    public function getLength() {
        return $this->length;
    }
    
    /**
     * Setter for the length of the Rectangle
     *
     * @param number length of the Rectangle
     *
     * @throws InvalidArgumentException
     */
    public function setLength($length) {
        if (is_numeric($length)) {
            $this->length = $length;
        }
        else { throw new InvalidArgumentException(); }
    }

    /**
     * Returns the width of the Rectangle
     *
     * @return number width of the Rectangle
     */
    public function getWidth() {
        return $this->width;
    }
    
    /**
     * Setter for the width of the Rectangle
     *
     * @param number width of the Rectangle
     *
     * @throws InvalidArgumentException
     */
    public function setWidth($width) {
        if (is_numeric($width)) {
            $this->width = $width;
        }
        else {
            throw new InvalidArgumentException();
        }
    }

    /**
     * Returns the area of the Rectangle
     *
     * @return number area of the Rectangle
     */
    public function getArea() {
        return $this->length * $this->width;
    }

    /**
     * Returns the perimeter of the Rectangle
     *
     * @return number perimeter of the Rectangle
     */
    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
} // end Rectangle

?>
