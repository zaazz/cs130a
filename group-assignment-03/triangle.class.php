<?php

/**
 * Represents a triangle
 */
class Triangle extends Shape {
    private $vertices; // An array of Vector objects

    
    /**
     * Constructor for a triangle, requiring an array of three vertices
     */
    public function __construct($vertices) {
        $this->setVertices($vertices);
    }

    /**
     * Getter for vertices
     */
    public function getVertices() {
        return $this->vertices;
    }

    /** 
     * Setter for vertices
     */ 
    public function setVertices($vertices){
        if (count($vertices) === 3 && $this->isVectorArray($vertices)) {
            $this->vertices = $vertices;
        }
        else { throw new InvalidArgumentException(); }
    }
    
    /**
     * Returns the area of the Rectangle
     */
    public function getArea() {
    }

    /**
     * Returns the circumference of the Rectangle
     */
    public function getCircumference() {
    }

    // Determines whether all elements in an array are Vector objects
    private function isVectorArray($arr) {
        forEach($arr as $elem) {
            if (!($elem instanceof Vector)) {
                return false;
            }
        }
        return true;
    }
}

?>
