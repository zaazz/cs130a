<?php
  if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
  }
?>

<html>
  <head>
    <title>Lab 08</title>
    <style>
      body {
        font-family: "helvetica";
        font-size: 15px;
      }
      form input {
        text-align: right;
      }
      table td {
        font-family: "helvetica";
      }
      #output td, th {
        text-align: right;
        font-family: "courier new", monospace;
        padding: 10px;
        border: 1px solid #999;
      }
      #output th {
        text-align: center;
      }
      #output {
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>
    <div style="width:50%;">   
      <h2>&#9835; Old MacDonald &#9834;</h2>
      <form action='lab08.php' method='post'>
        <p>Select as many animals as you would like:<br/>
        <select name='animalNoises[]' size=5 multiple>
          <option value='pig:oink'>Pig
          <option value='duck:quack'>Duck
          <option value='cow:moo'>Cow
          <option value='sheep:baa'>Sheep
          <option value='horse:neigh'>Horse
          <option value='dog:woof'>Dog
          <option value='cat:meow'>Cat
          <option value='rooster:cock-a-doodle-doo'>Rooster
        </select></p>
        <input type='submit' value='Sing!'>
      </form>
    </div>
    <?php
      // verify request exists before running script
      if (isset($_POST['animalNoises'])) {
      
        // grab input from request
        $noises = $_POST['animalNoises'];

        // process each animal selected and print
        for ($i = 0; $i < count($noises); $i++) {
          $currentAnimal = explode(':', $noises[$i]);
          printOneVerse($currentAnimal[0], $currentAnimal[1]);
        } 
      }
      
      // prints one verse of "old macdonald" in HTML
      function printOneVerse($animal, $noise) {
        print "<p><i>Old MacDonald had a farm, E-I-E-I-O!<br>
               And on that farm he had a $animal, E-I-E-I-O!<br>
               With a $noise-$noise here and a $noise-$noise there<br>
               Here a $noise, there a $noise, everywhere a $noise-$noise<br>
               Old MacDonald had a farm, E-I-E-I-O!</i></p>";
      }
    ?>
  </body>
</html>
