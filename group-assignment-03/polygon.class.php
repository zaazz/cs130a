<?php
include_once('../printable.php');


/**
 * Represents a polygon, a shape with any number of vertices > 2
 */
class Polygon extends Shape {
    private $vertices;   // An array of Vector objects
    private $sides=[];      // An array of side lengths


    /**
     * Constructor for a Polygon object
     *
     * @param array  $vertices an array of three or more Vector objects
     * @param string $color    the string color of the Polygon 
     *
     * @throws InvalidArgumentException
     */
    public function __construct($vertices, $color) {
        parent::setColor($color);
        $this->setVertices($vertices);
    }

    /**
     * Getter for vertices of the Polygon
     *
     * @return array an array of Vector objects
     */
    public function getVertices() {
        return $this->vertices;
    }

    /**
     * Setter for vertices, requiring an array of three or more vertices
     *
     * @param array $vertices an array of three or more Vector objects
     *
     * @throws InvalidArgumentException
     */
    public function setVertices($vertices){
        if (count($vertices) > 2 && $this->isVectorArray($vertices)) {
            $this->vertices = $vertices;

            // Set or re-set instance side lengths
            $this->setSides($vertices);
        }
        else { throw new InvalidArgumentException(); }
    }

    /**
     * Getter for side lengths
     *
     * @return array the number lengths of the sides of the Polygon
     */
    public function getSides() {
        return $this->sides;
    }

    /**
     * Returns the area of the Polygon
     *
     * @return number the area of the Polygon
     */
    public function getArea() {

        // Not perfect--see:
        // http://www.mathopenref.com/coordpolygonarea2.html

        // Accumulate area
        $area = 0; 

        // Set last vertex previous to the first
        $j = count($this->vertices)-1;  

        for ($i = 0; $i < count($this->vertices); $i++) {
            $area += ($this->vertices[$j]->x + $this->vertices[$i]->x) * 
                     ($this->vertices[$j]->y - $this->vertices[$i]->y);

            // Set j to the current i, which will be the previous next iteration
            $j = $i;  
        }
        
        return $area / 2; 
    }

    /**
     * Returns the perimeter of the Polygon
     *
     * @return number the perimeter of the Polygon
     */
    public function getPerimeter() {
        return array_sum($this->sides);
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
    
    // Determines whether all elements in an array are Vector objects
    private function isVectorArray($arr) {
        forEach($arr as $element) {
            if (!($element instanceof Vector)) {
                return false;
            }
        }
        return true;
    }
} // end Polygon

?>
