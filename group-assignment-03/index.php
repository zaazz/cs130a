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
  Contributors: Greg Gorlen 
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Group assignment 03: Object-Oriented Programming</title>
    <style>
      body {
        margin: 10px;
        font-family: "helvetica";
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

      ?>
    </div>
  </body>
</html>
