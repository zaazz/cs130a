<?php
include_once('../printable.php');


/**
 * Represents a square
 */
class Square extends Rectangle {
    private $size; //Square only requires one length & width
    
    /**
     * Constructor for a Square
     *
     * @param Vector $origin the origin of the square (upper-left corner)
     * @param number $size the length & width of the square
     *
     * @throws InvalidArgumentException
     */
    public function __construct($origin, $size, $color) {
        $this->setOrigin($origin);
        $this->setSize($size);
        $this->setColor($color);
    }

 
    /**
     * Getter for the size of the Square
     *
     * @return number size of the Square
     */
    public function getSize() {
        return $this->size;
    }
    
    /**
     * Setter for the size of the Square
     *
     * @param number size of the Square
     *
     * @throws InvalidArgumentException
     */
    public function setSize($size) {
        if (is_numeric($size)) {
            $this->size = $size;
        }
        else { throw new InvalidArgumentException(); }
    }

    /**
     * Returns the area of the Square
     *
     * @return number area of the Square
     */
    public function getArea() {
        return pow($this->size, 2);
    }

    /**
     * Returns the perimeter of the Square
     *
     * @return number perimeter of the Square
     */
    public function getPerimeter() {
        return 4 * ($this->size);
    }
} // end Square

?>
