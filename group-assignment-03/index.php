<?php
  include_once('../printable.php');

  // Import required classes and scripts
  require_once('vector.class.php'); 
  require_once('shape.class.php'); 
  require_once('polygon.class.php');
  require_once('rectangle.class.php'); 
  require_once('square.class.php'); 
  require_once('triangle.class.php'); 
  require_once('circle.class.php'); 
  require_once('rhombus.class.php');
  include_once('rendering.php'); 
?>
<!-- 
  Contributors: Greg Gorlen, Ted Herr, Julie Ann Yuen

  PHP Style guide : https://pear.php.net/manual/en/standards.sample.php
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Group assignment 3: Object-Oriented Programming</title>
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
      </canvas>

      <?php
        // Create an array which will hold all of our shapes--
        // shapes added first will be drawn first.
        $shapes = [];
        
        // Canvas height and width
        $h = $w = 400;

        // Make a polygon
        array_push($shapes, new Polygon([vec(20, 40), vec(80, 10), vec(50, 90), 
                                         vec(100, 100), vec(14, 130)], "#59905b"));

        // Make a square
        array_push($shapes, new Square(new Vector(140, 110), 150, "#f9cc77"));
        
        // Make a rectangle
        array_push($shapes, new Rectangle(new Vector(70, 350), 100, 30, "#40ebf7"));

        // Make a circle
        array_push($shapes, new Circle(new Vector(353, 288), 15, "#58e40c"));

        // Make a triangle 
        array_push($shapes, new Triangle(
          [new Vector(110, 120), new Vector(50, 230), new Vector(160, 180)], "#c450eb"
        ));

        // Make a rhombus 
        array_push($shapes, new Rhombus(
          [new Vector(320, 120), new Vector(330, 140), 
           new Vector(320, 160), new Vector(310, 140)], "#f44b42"
        ));

        // Make colored lines
        for ($i = 0; $i < 10; $i++) {
          array_push($shapes, new Rectangle(new Vector($i * 40, 390), 40, 3, rhsl()));
          array_push($shapes, new Rectangle(new Vector(390, $i * 40), 3, 40, rhsl()));
        }


        // Print information for each of our shapes
        echo '<pre>';
        foreach($shapes as $shape) {
          $shapeType = get_class($shape);
          print_r($shape);
          echo 'Perimeter of the ' . $shapeType . ': ' . 
                $shape->getPerimeter() . '<br />' .
               'Area of the ' . $shapeType . ': ' . 
               $shape->getArea() . '<br />' .
               '--------------------------------------------------------<br />';
        }
        echo '</pre>';


        // Makes a new vector object
        function vec($x, $y) {
          return new Vector($x, $y);
        }

        // Generates a random hsl color string
        function rhsl() {
          return 'hsl(' . mt_rand(0, 255) . ', ' . 
            mt_rand(0, 100) . '%,' . mt_rand(10, 90) . '%)';
        }
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
