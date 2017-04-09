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

    /**
      *  Determines whether all elements in an array are Vector objects
      *
      * @param array $arr an input array to test
      * @return boolean true if each element in the array
      *                 is a Vector, false otherwise
      */
    public static final function isVectorArray($arr) {
        forEach($arr as $element) {
            if (!($element instanceof Vector)) {
                return false;
            }
        }
        return true;
    }
} // end Vector

?>
