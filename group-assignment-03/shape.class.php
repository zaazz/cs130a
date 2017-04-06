<?php
  if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
  }
?>

<?php

/**
 * Represents a shape
 */
abstract class Shape {
    private $color;


    /**
     * Returns the area of the shape
     *
     * @return number area
     */
    abstract public function getArea();

    /**
     * Returns the perimeter of the shape
     *
     * @return number perimeter
     */
    abstract public function getPerimeter();

    /**
     * Returns the color of of the shape
     *
     * @return string color
     */
    public final function getColor() {
        return $this->color;
    }

    /**
     * Sets the color of of the shape
     *
     * @param string $color the color of the shape
     */
    public function setColor($color) {
        $this->color = $color;
    }
} // end Shape

?>
