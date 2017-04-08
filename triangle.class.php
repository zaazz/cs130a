<?php
include_once('../printable.php');


/**
 * Represents a triangle
 */
class Triangle extends Shape {
    private $vertices; // An array of Vector objects
    private $sides;    // An array of side lengths

    
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
        $this->setColor($color);
    }

    /**
     * Getter for vertices of the Triangle
     * 
     * @return array an array of Vector objects
     */
    public function getVertices() {
        return $this->vertices;
    } 

    /** 
     * Setter for vertices, requiring an array of three vertices
     *
     * @param array $vertices an array of three Vector objects
     *
     * @throws InvalidArgumentException
     */ 
    public function setVertices($vertices){
        if (count($vertices) === 3 && $this->isVectorArray($vertices)) {
            $this->vertices = $vertices;

            // Set or re-set instance side lengths
            $this->setSides($vertices);
        }
        else { throw new InvalidArgumentException(); }
    }

    /**
     * Getter for side lengths
     *
     * @return array the number lengths of the sides of the Triangle
     */
    public function getSides() {
        return $this->sides;
    }

    /**
     * Returns the area of the Triangle
     *
     * @return number the area of the Triangle
     */
    public function getArea() {

        // Store sides in temporary variables
        list($a, $b, $c) = $this->sides;
        
        // Heron's formula for area of a triangle
        $s = ($a + $b + $c) / 2;
        return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    }

    /**
     * Returns the perimeter of the Triangle
     *
     * @return number the perimeter of the Triangle
     */
    public function getPerimeter() {
        return array_sum($this->sides);
    }


    // Sets or re-sets the side instance data whenever vertices are set
    private function setSides($vertices) {

        // Initialize sides instance variable as array
        $this->sides = [];

        // Store vertices in temporary variables
        list($v1, $v2, $v3) = $vertices;

        // Set the side lengths by taking the distance between each vertex
        array_push($this->sides, sqrt(pow($v1->x - $v2->x, 2) + pow($v1->y - $v2->y, 2)));
        array_push($this->sides, sqrt(pow($v3->x - $v1->x, 2) + pow($v3->y - $v1->y, 2)));
        array_push($this->sides, sqrt(pow($v3->x - $v2->x, 2) + pow($v3->y - $v2->y, 2)));
    } // end setSides

    // Determines whether all elements in an array are Vector objects
    private function isVectorArray($arr) {
        forEach($arr as $element) {
            if (!($element instanceof Vector)) {
                return false;
            }
        }
        return true;
    } // end isVectorArray
} // end Triangle

?>
