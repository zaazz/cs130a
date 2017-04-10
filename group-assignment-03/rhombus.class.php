<?php
include_once('../printable.php');


/* Note: unfinished class! */



/**
 * Represents a rhombus, a regular polygon with 4 equal sides
 */
class Rhombus extends Polygon {
    private $diagonals;  // An array of diagonal lengths
    private $sides;     // An array of diagonal lengths


    /**
     * Constructor for a Rhombus object
     *
     * @param array  $vertices an array of three Vector objects
     * @param string $color    the string color of the Rhombus 
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
        if (count($vertices) === 4) {
            $this->vertices = $vertices;

            // Set or re-set instance side lengths
            $this->setSides($vertices);

            // Throw an exception if side lengths aren't all the same
            // Todo: this is a kludge, but it helps enforce Rhombus-ness for now
            if (array_sum($this->sides) !== $this->sides[0] * 4) {
                 throw new InvalidArgumentException(); 
            }
        }
        else { throw new InvalidArgumentException(); }
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

    // Sets or re-sets the side instance data whenever vertices are set
    protected function setSides($vertices) {

        // Initialize sides instance variable as array
        $this->sides = [];

        // Set last vertex previous to the first
        $j = count($this->vertices)-1;

        for ($i = 0; $i < count($this->vertices); $i++) {
            array_push($this->sides, sqrt(pow($this->vertices[$j]->x - $this->vertices[$i]->x, 2) +
                                          pow($this->vertices[$j]->y - $this->vertices[$i]->y, 2)));

            // Set j to the current i, which will be the previous next iteration
            $j = $i;
        }
    }

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
} // end Rhombus

?>
