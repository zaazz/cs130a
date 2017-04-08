<?php
include_once('../printable.php');


/**
 * Represents a rhombus
 */
class Rhombus extends Shape {
    private $vertices;   // An array of Vector objects
    private $sides;      // An array of side lengths
    private $diagonals;  // An array of diagonal lengths


    /**
     * Constructor for a Rhombus object
     *
     * @param array  $vertices an array of three Vector objects
     * @param string $color    the string color of the Triangle
     *
     * @throws InvalidArgumentException
     */
    public function __construct($vertices, $color) {
        $this->setVertices($vertices);
        $this->setDiagonals($vertices);
        $this->setColor($color);
    }

    /**
     * Getter for vertices of the Rhombus
     *
     * @return array an array of Vector objects
     */
    public function getVertices() {
        return $this->vertices;
    }

    /**
     * Setter for vertices, requiring an array of four vertices
     *
     * @param array $vertices an array of four Vector objects
     *
     * @throws InvalidArgumentException
     */
    public function setVertices($vertices){
        if (count($vertices) === 4 && $this->isVectorArray($vertices)) {
            $this->vertices = $vertices;

            // Set or re-set instance side lengths
            $this->setSides($vertices);
        }
        else { throw new InvalidArgumentException(); }
    }

    /**
     * Getter for side lengths
     *
     * @return array the number lengths of the sides of the Rhombus
     */
    public function getSides() {
        return $this->sides;
    }

    /**
     * Returns the area of the Rhombus
     *
     * @return number the area of the Rhombus
     */
    public function getArea() {

        // Store sides in temporary variables
        list($p, $q) = $this->diagonals;

        // heuristic for area of a rhombus - multiply the lengths of the diagonals (p, q) together
        return $p * $q;
    }

    /**
     * Returns the perimeter of the Rhombus
     *
     * @return number the perimeter of the Rhombus
     */
    public function getPerimeter() {
        return array_sum($this->sides);
    }

    // Sets or re-sets the side instance data whenever vertices are set
    private function setSides($vertices) {

        // Initialize sides instance variable as array
        $this->sides = [];

        // Store vertices in temporary variables
        list($v1, $v2, $v3, $v4) = $vertices;

        // Set the side lengths by taking the distance between each vertex.  Rhombas vertices are numbered clockwise from vertex 1
        array_push($this->sides, sqrt(pow($v2->x - $v1->x, 2) + pow($v2->y - $v1->y, 2)));
        array_push($this->sides, sqrt(pow($v3->x - $v2->x, 2) + pow($v3->y - $v2->y, 2)));
        array_push($this->sides, sqrt(pow($v4->x - $v3->x, 2) + pow($v4->y - $v3->y, 2)));
        array_push($this->sides, sqrt(pow($v1->x - $v4->x, 2) + pow($v1->y - $v4->y, 2)));
    } // end setSides

    // Calculates the length of the diagonals
    private function setDiagonals($vertices) {

        // Initialize diagonals instance variable as array
        $this->diagonals = [];

        // Store vertices in temporary variables
        list($v1, $v2, $v3, $v4) = $vertices;

        // Calculate the diagonal lengths. Vertices are numbered clockwise around the rhombus
        array_push($this->diagonals, sqrt(pow($v3->x - $v1->x, 2) + pow($v3->y - $v1->y, 2)));
        array_push($this->diagonals, sqrt(pow($v4->x - $v2->x, 2) + pow($v4->y - $v2->y, 2)));

    } // end setDiagonals
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
