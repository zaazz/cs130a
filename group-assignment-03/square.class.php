<?php
include_once('../printable.php');


/**
 * Represents a square, which is a Rectangle where length == width
 */
class Square extends Rectangle {

    
    /**
     * Constructor for a Square
     *
     * @param Vector $origin the origin of the square (upper-left corner)
     * @param number $size the length & width of the square
     *
     * @throws InvalidArgumentException
     */
    public function __construct($origin, $size, $color) {
        parent::setOrigin($origin);
        parent::setColor($color);
        $this->setSize($size);

        // This line throws an error for me, not sure why!
        // Rectangle::__construct($origin, $size, $size, $color); 
    }
 
    /**
     * Getter for the size of the Square
     *
     * @return number size of the Square
     */
    public function getSize() {
        return $this->width;
    }
    
    /**
     * Setter for the size of the Square
     *
     * @param number size of the Square
     *
     * @throws InvalidArgumentException
     */
    public function setSize($size) {
        parent::setLength($size);
        parent::setWidth($size);
    }

    /**
     * Setter for the size of the Square
     *
     * @param number size of the Square
     *
     * @throws InvalidArgumentException
     */
    public function setLength($length) {
        $this->setSize($length);
    }

    /**
     * Setter for the size of the Square
     *
     * @param number size of the Square
     *
     * @throws InvalidArgumentException
     */
    public function setWidth($width) {
        $this->setSize($length);
    }
} // end Square

?>
