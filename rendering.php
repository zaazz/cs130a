<?php
include_once('../printable.php');


// Array of valid Polygons which have three or more vertices
const POLYGONS = ['polygon', 'triangle', 'rhombus', 
                  'parallelogram', 'octagon', 'hexagon'];


/*
 * This file contains necessary code to render PHP shapes on JS canvas.
 * Output from these methods must be enclosed in <script> tags.
 */

// Outputs Javascript to draw a Rectangle object on a canvas context
function drawRectangle($ctx, $rectangle) {
  return $ctx . '.fillStyle = "' . $rectangle->getColor() . '";' .
    $ctx . '.fillRect(' . $rectangle->getOrigin()->x . ', ' .
    $rectangle->getOrigin()->y . ', ' . $rectangle->getLength() . ', ' .
    $rectangle->getWidth() . ');';
} // end drawRectangle

// Outputs Javascript draw a Polygon object on a canvas context
function drawPolygon($ctx, $polygon) {
  $output = $ctx . '.beginPath();' . $ctx . '.fillStyle = "' .
    $polygon->getColor() . '";';
  foreach ($polygon->getVertices() as $v) {
    $output .= 'ctx.lineTo(' . $v->x . ', ' . $v->y . ');';
  }
  return $output . $ctx . '.closePath();' . $ctx . '.fill();';
} // end drawPolygon


// Outputs Javascript to draw a Circle object on a canvas context
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
  $shapeType = strtolower(get_class($shape));
  if (strpos($shapeType, 'rectangle') !== false || 
      strpos($shapeType, 'square') !== false) {
    return drawRectangle($ctx, $shape);
  }
  else if (strpos($shapeType, 'circle') !== false) {
    return drawCircle($ctx, $shape);   
  }
  else if (strpos($shapeType, 'triangle') !== false ||
          in_array($shapeType, POLYGONS)) {
    return drawPolygon($ctx, $shape); 
  }
  else { 
    throw new InvalidArgumentException(); 
  }
} // end draw

?>
