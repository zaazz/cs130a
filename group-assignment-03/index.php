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
          [new Vector(3, 4), new Vector(6,7), new Vector(1,4)]
        );
        print_r($triangle);

        echo '<br />----------------------------------------------------<br />';

        // Make a circle
        $circle = new Circle(new Vector(113, 202), 90);
        print_r($circle);
        echo 'Circle circumference: ' . $circle->getCircumference(). '<br />';
        echo 'Changing circle radius to 30..' . $circle->setRadius(30). '<br />';
        echo 'Circle circumference: ' . $circle->getCircumference(). '<br />';

        echo '<br />----------------------------------------------------<br />';

        // Make a rectangle
        $rectangle = new Rectangle(new Vector(50, 50), 10, 30);
        print_r($rectangle);
        echo 'Rectangle perimeter: ' . $rectangle->getPerimeter() . '<br />';

        echo '</pre>';
      ?>
    </div>
  </body>
</html>
