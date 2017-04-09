<?php
include_once('../printable.php');


/**
 * Represents a square
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
        Rectangle::__construct($origin, $size, $size, $color);
    }

      /**
     * Setter for the length of the Square, also sets width to maintain square shape
     *
     * @param number $size of the Square
     *
     * @throws InvalidArgumentException
     */
    public function setLength($size){
        if (is_numeric($size) && $size>0) {
            $this->length = $size;
            $this->width= $size;
        }
        else { throw new InvalidArgumentException(); }      
    }
  
      /**
     * Setter for the width of the Square, also sets length to maintain square shape
     *
     * @param number $size of the Square
     *
     * @throws InvalidArgumentException
     */
    public function setWidth($size){
        if (is_numeric($size) && $size>0) {
            $this->width = $size;
            $this->length = $size;
        }
        else { throw new InvalidArgumentException(); }      
    }
  
} // end Square

?>
