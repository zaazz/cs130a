<?php
  if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
  }
?>

<?php

/*
 * This file contains necessary code to render PHP shapes on JS canvas.
 * Output from these methods must be enclosed in <script> tags.
 */

// Draws a rectangle on a canvas context
function drawRectangle($ctx, $rectangle) {
  return $ctx . '.fillStyle = "' . $rectangle->getColor() . '";' .
    $ctx . '.fillRect(' . $rectangle->getOrigin()->x . ', ' .
    $rectangle->getOrigin()->y . ', ' . $rectangle->getLength() . ', ' .
    $rectangle->getWidth() . ');';
} // end drawRectangle

// Draws a triangle on a canvas context
function drawTriangle($ctx, $triangle) {
  $output = $ctx . '.beginPath();' . $ctx . '.fillStyle = "' .
    $triangle->getColor() . '";';
  foreach ($triangle->getVertices() as $v) {
    $output .= 'ctx.lineTo(' . $v->x . ', ' . $v->y . ');';
  }
  return $output . $ctx . '.closePath();' . $ctx . '.fill();';
} // end drawTriangle


// Draws a circle on a canvas context
function drawCircle($ctx, $circle) {
  return $ctx . '.beginPath();' . $ctx . '.fillStyle = "' .
    $circle->getColor() . '";' .
    $ctx . '.arc(' . $circle->getOrigin()->x . ',' .
    $circle->getOrigin()->y . ',' . $circle->getRadius() .
    ', 0, Math.PI * 2);' . $ctx . '.closePath();' .
    $ctx . '.fill();';
} // end drawCircle

// Draws a shape on a canvas context if possible
function draw($ctx, $shape) {
  switch (strtolower(get_class($shape))) {
    case 'rectangle': return drawRectangle($ctx, $shape); break;
    case 'circle': return drawCircle($ctx, $shape); break;
    case 'triangle': return drawTriangle($ctx, $shape); break;
    default: throw new InvalidArgumentException();
  }
} // end draw

?>
