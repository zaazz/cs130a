<?php
  include_once('../printable.php');

  // Import required classes and scripts
  require_once('shape.class.php'); 
  require_once('vector.class.php'); 
  require_once('rectangle.class.php'); 
  require_once('circle.class.php'); 
  require_once('triangle.class.php'); 
  require_once('rhombus.class.php');
  include_once('rendering.php'); 
?>
<!-- 
  Contributors: Greg Gorlen, Ted Herr

  PHP Style guide : https://pear.php.net/manual/en/standards.sample.php
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Group assignment 03: Object-Oriented Programming</title>
    <style>
      body {
        margin: 10px;
        font-family: "monospace";
        font-size: 13px;
        width: 95%;
      }
      #main {
        width: 420px;
      }
    </style>
  </head>
  <body>
    <div id="main">

      <!-- Create a canvas element to render the shapes onto -->
      <canvas width=400 height=400 id="paper" style="border: 1px solid #666;">
        Your browser doesn't support the canvas tag.
      </canvas>


      <?php
        // Create an array which will hold all of our shapes--
        // shapes added first will be drawn first.
        $shapes = [];


        // Make a rectangle and add it to the shapes array
        array_push($shapes, new Rectangle(new Vector(50, 50), 100, 30, "#40ebf7"));

        // Make couple circles and add them to the shapes array
        array_push($shapes, new Circle(new Vector(113, 202), 60, "#0056b0"));
        array_push($shapes, new Circle(new Vector(353, 288), 15, "#58e40c"));

        // Make a triangle and add it to the shapes array
        array_push($shapes, new Triangle(
          [new Vector(110, 190), new Vector(250, 170), new Vector(210, 340)], "#c450eb"
        ));

        // Make a rhombus and add it to the shapes array
        array_push($shapes, new Rhombus(
          [new Vector(200, 35), new Vector(220, 95), 
           new Vector(270, 133.73), new Vector(250, 73.73)], "#f44b42"
        ));

        // Make a non-Rhombus figure using the Rhombus class--should be illegal?
        array_push($shapes, new Rhombus(
          [new Vector(200, 170), new Vector(240, 195), 
           new Vector(200, 235), new Vector(320, 170)], "#08ac92"
        ));

        // Print information for each of our shapes
        echo '<pre>';
        foreach($shapes as $shape) {
          $shapeType = get_class($shape);
          print_r($shape);
          echo 'Perimeter of the ' . $shapeType . ': ' . $shape->getPerimeter() . '<br />' .
               'Area of the ' . $shapeType . ': ' . $shape->getArea() . '<br />' .
               '<br />--------------------------------------------------------<br />';
        }
        echo '</pre>';
      ?>

    </div>


    <!-- Render shapes on canvas -->
    <script>

      // Grab canvas element from DOM
      let canvas = document.getElementById("paper");
      let ctx = canvas.getContext("2d");

      <?php 
        // Draw the shapes
        foreach ($shapes as $shape) {
          try {
            echo draw('ctx', $shape); 
          } catch (Exception $e) {
            echo 'console.log("Caught error: unable to draw ' . 
                 get_class($shape) . '\n ' . $e->getMessage() . '");';
          }
        } 
      ?>

    </script>
  </body>
</html>
