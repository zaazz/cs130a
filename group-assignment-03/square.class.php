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
       if (is_numeric($size) && $size > 0){
        Rectangle::__construct($origin, $size, $size, $color);
           }
        else { throw new InvalidArgumentException(); }
    }

} // end Square

?>
