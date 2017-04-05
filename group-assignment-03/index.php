<?php
  if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
  }
?>

<?php 
  // Import required classes
  require_once('shape.class.php'); 
  require_once('vector.class.php'); 
  require_once('rectangle.class.php'); 
  require_once('circle.class.php'); 
  require_once('triangle.class.php'); 
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
      }
    </style>
  </head>
  <body>
    <div id="main">
      <?php
        echo '<pre>';

        // Make a triangle
        $triangle = new Triangle(
          [new Vector(130, 140), new Vector(60, 170), new Vector(210, 240)], "#c450eb"
        );
        print_r($triangle);

        echo '<br />----------------------------------------------------<br />';

        // Make a circle
        $circle = new Circle(new Vector(113, 202), 90, "#0056b0");
        print_r($circle);
        echo 'Circle circumference: ' . $circle->getCircumference(). '<br />';
        echo 'Changing circle radius to 30..' . $circle->setRadius(30). '<br />';
        echo 'Circle circumference: ' . $circle->getCircumference(). '<br />';

        echo '<br />----------------------------------------------------<br />';

        // Make a rectangle
        $rectangle = new Rectangle(new Vector(50, 50), 100, 30, "#40ebf7");
        print_r($rectangle);
        echo 'Rectangle perimeter: ' . $rectangle->getPerimeter() . '<br />';
        echo 'Rectangle area: ' . $rectangle->getArea() . '<br />';


        echo '</pre>';
      ?>

    <!-- Create a canvas element to render the shapes onto -->
    <canvas width=400 height=400 id="paper" style="border: 1px solid #000;">
      Your browser doesn't support the canvas tag.
    </canvas>
    </div>


    <!-- Render shapes on canvas -->
    <script>

      // Grab canvas element from DOM
      let canvas = document.getElementById("paper");
      let ctx = canvas.getContext("2d");

      // Draw the rectangle
      ctx.fillStyle = "<?php echo $rectangle->getColor(); ?>";
      ctx.fillRect(<?php echo $rectangle->getOrigin()->x . ', ' .
                              $rectangle->getOrigin()->y . ', ' .
                              $rectangle->getLength() . ', ' .
                              $rectangle->getWidth(); ?>); 

      // Draw the triangle
      ctx.beginPath();
      ctx.fillStyle = "<?php echo $triangle->getColor(); ?>";
      <?php 
        foreach ($triangle->getVertices() as $v) {
          echo 'ctx.lineTo(' . $v->x . ', ' . $v->y . ');';
        }
      ?> 
      ctx.closePath();
      ctx.fill();

      // Draw the circle
      ctx.beginPath();
      ctx.fillStyle = "<?php echo $circle->getColor(); ?>";
      ctx.arc(<?php echo $circle->getOrigin()->x . ',' . 
                         $circle->getOrigin()->y . ',' .
                         $circle->getRadius(); ?>, 0, Math.PI * 2);
      ctx.fill();

    </script>

  </body>
</html>
