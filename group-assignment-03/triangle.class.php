<?php
include_once('../printable.php');


/**
 * Represents a triangle, which is a Polygon with three sides
 */
class Triangle extends Polygon {

    
    /**
     * Constructor for a Triangle object
     *
     * @param array  $vertices an array of three Vector objects
     * @param string $color    the string color of the Triangle
     *
     * @throws InvalidArgumentException
     */
    public function __construct($vertices, $color) {
        $this->setVertices($vertices);
        parent::setColor($color);
    }

    /** 
     * Setter for vertices, requiring an array of three vertices
     *
     * @param array $vertices an array of three Vector objects
     *
     * @throws InvalidArgumentException
     */ 
    public function setVertices($vertices){
        if (count($vertices) === 3) {
            parent::setVertices($vertices);
        }
        else { throw new InvalidArgumentException(); }
    }
} // end Triangle

?>
