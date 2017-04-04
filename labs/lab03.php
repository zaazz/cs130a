<?php
  if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
  }
?>


<html> 
  <head> 
    <title>Lab 03</title> 
  </head> 
  <body> 
   
    <?php
    
      // Part I
    
      $firstName = "Greg";
      const LAST_NAME = "Gorlen";
      define("GREETING", "Hello, I'm $firstName " . LAST_NAME);
    
      echo GREETING . "<br><br>";
      
      
      // Part II
    
      // Variables of my own choosing
      $age = 30;
      $alive = true;
      $pi = 3.14159265359;
      $fullName = "$firstName " . LAST_NAME;
      $otherFullName = '$firstName ' . LAST_NAME;
    
       // output the value and type of the variable $age
      echo 'the value of the variable $age is: ' . $age . "<br>";
      echo 'the type of the variable $age is: ' . gettype($age) . "<br><br>";
    
       // output the value and type of the variable $alive
      echo 'the value of the variable $alive is: ' . $alive . "<br>";
      echo 'the type of the variable $alive is: ' . gettype($alive) . "<br><br>";
    
       // output the value and type of the variable $pi
      echo 'the value of the variable $pi is: ' . $pi . "<br>";
      echo 'the type of the variable $pi is: ' . gettype($pi) . "<br><br>";
    
       // output the value and type of the variable $fullName
      echo 'the value of the variable $fullName is: ' . $fullName . "<br>";
      echo 'the type of the variable $fullName is: ' . gettype($fullName) . "<br><br>";
    
       // output the value and type of the variable $otherFullName
      echo 'the value of the variable $otherFullName is: ' . $otherFullName . "<br>";
      echo 'the type of the variable $otherFullName is: ' . gettype($otherFullName) . "<br><br>";
    
      // variables from assignment
      $intvar = 2;
      $floatvar = 4.4;
      $string = "1 is the loneliest number";
      $thisvar = $intvar + $string;
      $that = $floatvar - $string;
      $other = $intvar * $floatvar;
      $what = "$intvar";
    
       // output the value and type of the variable $intvar
      echo 'the value of the variable $intvar is: ' . $intvar . "<br>";
      echo 'the type of the variable $intvar is: ' . gettype($intvar) . "<br><br>";
    
       // output the value and type of the variable $floatvar
      echo 'the value of the variable $floatvar is: ' . $floatvar . "<br>";
      echo 'the type of the variable $floatvar is: ' . gettype($floatvar) . "<br><br>"; 
    
       // output the value and type of the variable $string
      echo 'the value of the variable $string is: ' . $string . "<br>";
      echo 'the type of the variable $string is: ' . gettype($string) . "<br><br>"; 
    
       // output the value and type of the variable $thisvar
      echo 'the value of the variable $thisvar is: ' . $thisvar . "<br>";
      echo 'the type of the variable $thisvar is: ' . gettype($thisvar) . "<br><br>"; 
    
       // output the value and type of the variable $that
      echo 'the value of the variable $that is: ' . $that . "<br>";
      echo 'the type of the variable $that is: ' . gettype($that) . "<br><br>"; 
    
       // output the value and type of the variable $other
      echo 'the value of the variable $other is: ' . $other . "<br>";
      echo 'the type of the variable $other is: ' . gettype($other) . "<br><br>"; 
    
       // output the value and type of the variable $what
      echo 'the value of the variable $what is: ' . $what . "<br>";
      echo 'the type of the variable $what is: ' . gettype($what) . "<br><br>"; 
    
    ?> 
   
  </body> 
</html> 


<!--

NOTES:

As with most other duck-typed languages, PHP has some interesting quirks in regards to type
which are important to understand.  Among the dynamic typed languages I've used before 
(Ruby, Python, Javascript), PHP seems to be about as quirky with type as JS, on first 
glance.  For example, the "+" operator isn't overloaded to perform concatenation, which
is handled by the "." operator.  As such, situations such as that encountered in the $thisvar
example illustrate that PHP is very eager to coerce numbers out of strings and add them
when they're operands of "+".  This seems very bug-prone and counterintuitive--but that's
how the language was designed, so it's probably there for a reason.

Another humorous example is the quotation mark syntax, which is usually reserved for string
literals.  In PHP, these quotation mark-enclosed strings seem subject to all manner of
parsing, resulting in variables being evaluated and returning their values in addition to
the expected escape characters.  In contrast, single-quotation strings are extremely
conservative, never parsing anything including escaped characters like "\n", which one 
might normally expect to be available in strings in other languages.  I imagine typing PHP 
such that I'm sending output by concatenating two or three strings using different quotation 
marks to achieve the desired effect.  Converting an int to a string by surrounding the int 
with quotes is... well... not very explicit, and it's nice to have languages such as Python
where one can pick one quote or the other and essentially forget about the complexity.

Combining the varied and subtly different quotation mark strings with the "." concatenation
operator and the very strange multiline docstring-style outputs, heredoc and nowdoc, which
each have their own quirks, such as naming the variable after the <<<< operator with or
without single-quotes (nowdoc being the latter), result in some incredibly subtle but
presumably powerful formatting and string interpolation options for output.

Having said that, though, while initially finding the $ Perl operator offputting for all 
variable cases, it does make them easily identifiable in the code and explicit, in contrast
with the rather finnicky datatype conversion, string, concatenation and docstring scenarios
PHP offers.

Overall, I find PHP, alongside JS, to be significantly less intuitive in handling 
conversion, type, strings, and concatenation than Ruby or Python, which are incredibly
intuitive.  But that's not the end of the language, and I hope that as I delve further into
PHP, I'll be pleasantly surprised by the power and nuance or unforseen "aha!" moments that
hopefully lie behind the upfront confusion and strangeness of the syntax and type behavior.

-->
