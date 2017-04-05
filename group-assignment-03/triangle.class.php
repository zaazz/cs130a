<?php

/**
 * Represents a triangle
 */
class Triangle extends Shape {
    private $vertices; // An array of Vector objects

    
    /**
     * Constructor for a triangle, requiring an array of three vertices
     */
    public function __construct($vertices, $color) {
        $this->setVertices($vertices);
        $this->setColor($color);
    }

    /**
     * Getter for vertices
     */
    public function getVertices() {
        return $this->vertices;
    }

    /** 
     * Setter for vertices, requiring an array of three vertices
     */ 
    public function setVertices($vertices){
        if (count($vertices) === 3 && $this->isVectorArray($vertices)) {
            $this->vertices = $vertices;
        }
        else { throw new InvalidArgumentException(); }
    }
    
    /**
     * Returns the area of the Triangle
     */
    public function getArea() {
        return; //  .5 * base * height
    }

    /**
     * Returns the perimeter of the Triangle
     */
    public function getPerimeter() {
    }

    // Determines whether all elements in an array are Vector objects
    private function isVectorArray($arr) {
        forEach($arr as $element) {
            if (!($element instanceof Vector)) {
                return false;
            }
        }
        return true;
    }
}

?>
