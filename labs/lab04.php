<?php
  include_once('../printable.php');
?>

<html>
  <head>
    <title>Lab 04</title>
  </head>
  <body>

    <?php

      $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
             "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
             "Finland"=>"Helsinki", "France" => "Paris", 
             "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
             "Germany" => "Berlin", "Greece" => "Athens", 
             "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
             "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
             "Sweden"=>"Stockholm", "United Kingdom"=>"London", 
             "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
             "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
             "Hungary"=>"Budapest", "Latvia"=>"Riga", 
             "Malta"=>"Valetta", "Austria" => "Vienna", 
             "Poland"=>"Warsaw") ;


      // Part I

      /* Here, the keys don't need to be enclosed in quotes because
       * of PHP's string identifier reference substitution.
       * The capital is looked up in the $ceu hash and printed.
       * Greece's output was created via concatenation for variety.
       */

      echo "The capital of Netherlands is $ceu[Netherlands]<br>";
      echo "The capital of Greece is " . $ceu["Greece"] . "<br>";
      echo "The capital of Germany is $ceu[Germany]<br><br>";

      // Part II

      /* In this scenario, the $ceu hash was sorted alphabetically
       * by key, preserving mapping between keys and values.
       */

      ksort($ceu);
      print_r($ceu); 
      echo "<br><br>";

      // Part III

      /* In this part, a traditional array sort is performed on 
       * the associative array, which returns a regularly indexed
       * array instead of an associative array.  In other words,
       * the values are sorted alphabetically, then the key portion
       * is discarded, replaced by regular array indexes.  In a key
       * sort, associations are maintained and values follow their
       * corresponding keys, which are sorted.  This is in contrast
       * to most other programming languages, which generally 
       * guarantee no order to their hash map structures.
       */ 

      $temparray = $ceu;
      sort($temparray);
      print_r($temparray);
      echo "<br><br>";

      // Part IV

      /* PHP seems flexible about its array creation, which is
       * great to see.  I like that the array has built in data 
       * structure methods for implementing stacks and queues.
       */

      $arr1 = ["broccoli", "kale", "squash"];
      $arr2 = ["apple", "cranberry", "lemon"];
      $multidimensional = [$arr1, $arr2];
      print_r($multidimensional);
      echo "<br><br>";

      $mynewarray = [["broccoli", "mushrooms", "peppers"],
               ["ginger", "garlic"],  ["beans", "pasta"]];
      print_r($mynewarray);
      echo "<br><br>";

      // Part V

      /* My observation here is that PHP seems fond of goofy
       * names for array methods, like explode, implode, and
       * unset, which reminds me of Ruby.  This approach is endearing
       * but can make remembering the names difficult at first.
       * Also, the snake_case method names seem very C++-esque,
       * since most other parts appear to follow camelCase convention,
       * so the overall feeling is that PHP syntax is like a big stew
       * of other language conventions.  Also worth mentioning is 
       * that these functions are modifying the original arrays in place,
       * rather than leaving parameters intact and returning new arrays.
       * It seems PHP's style is not to call these functions on array
       * objects as methods, as in array.sort(), but rather pass the
       * array as an argument to the built-in language function.
       */

      unset($ceu["Lithuania"]);
      print_r($ceu);

    ?>

  </body>
</html>


