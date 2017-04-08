<?php
include_once('../printable.php');


/**
 * Represents a Vector, a 2d point in space 
 * containing an x and y coordinate pair.
 */
class Vector {
    public $x;
    public $y;
    
    /**
     * Constructor for a Vector object
     *
     * @param number $x the x-coordinate of the Vector
     * @param number $y the y-coordinate of the Vector
     */
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
} // end Vector

?>
