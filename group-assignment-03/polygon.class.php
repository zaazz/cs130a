<?php
include_once('../printable.php');

/**
 * Represents a polygon
 */
class Polygon extends Circle {
    private $numsides; // number of sides for this polygon
    private $vertices; // An array of Vector objects
    

    /**
     * Constructor function
     *
     * @param Vector $origin the Vector center of the polygon
     * @param Number $radius the radius of the polygon
     * @param Integer $numsides the number of sides for this polygon
     *
     * @throws InvalidArgumentException 
     */
    public function __construct($origin, $radius, $numsides, $color) {
      Circle::__construct($origin, $radius, $color);
      $this->setNumSides($numsides);
      $this->vertices = $this->setVertices($this->getOrigin()->x, $this->getOrigin()->y, $radius, $numsides);
    }

    /**
     * Returns the number of sides of the polygon
     *
     * @return number of sides of the Polygon
     */
    public function getNumSides() {
        return $this->numsides;
    }

    /**
     * Sets the number of sides of the polygon
     *
     * @param integer $numsides the number of sides of the Polygon
     *
     * @throws InvalidArgumentException
     */
    public function setNumSides($numsides) {
        if (is_integer($numsides) && ($numsides >= 3)) {
            $this->numsides = $numsides;
        }
        else { throw new InvalidArgumentException(); }
    }

 
    // Sets the vertices array
    public function setVertices($x, $y, $radius, $numsides) {

      // Initialize vertices variable as empty array
      $array = [];

      // Loop to fill array with the coordinates of the points of the polygon
      for ($i = 1; $i <= $numsides; $i += 1) { 
        $point_x = $x + $radius * cos($i * 2 * pi() / $numsides);
        $point_y = $y + $radius * sin($i * 2 * pi() / $numsides);
        $array[] = new Vector($point_x, $point_y);
      }
      return $array;
    } // end setVertices

  
    /**
     * Returns the area of the circle
     *
     * @return number the area of the circle
     */
    public function getArea() {
        return M_PI * $this->radius ** 2;
    }

    /**
     * Returns the circumference of the circle
     *
     * @return number the circumference of the circle
     */
    public function getPerimeter() {
        return $this->getCircumference();
    }
} // end Circle


?>
