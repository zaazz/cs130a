<?php
  if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
  }
?>

<!-- Part II -->

<html> 
  <head> 
    <title>Lab 02</title> 
  </head> 
  <body> 
   
    <?php
      $hoursWorked = 40; 
      $payRate = 12;
      $grossPay = $hoursWorked * $payRate; 
    
      print "<p>Hours Worked: $hoursWorked</p>"; 
      print "<p>Pay Rate: $payRate</p>"; 
      print "<p>Gross Pay: $grossPay</p>"; 
    ?> 
   
  </body> 
</html> 


<!-- Part III: Experiments 

1. Parse error: syntax error, unexpected '$grossPay' (T_VARIABLE) 
   in /students/ggorlen/public_html/cs130a/lab02.php on line 16

   The removal of the ; caused the preprocessor to throw an error,
   meaning the script didn't even execute.  Adding a line such as:
   echo "Hello world"; on line 1 won't display, suggesting that 
   this is not a runtime error.


2. Hours Worked: 40

   Pay Rate: 12

   Gross Pay: 3.3333333333333

   Replacing * with a / results in division rather than multiplication.
   It's interesting to note that the / operator doesn't perform
   integer division, but performs floating point division, which
   evaluates to a decimal in this case.


3. Hours Worked: $hoursWorked

   Pay Rate: 12

   Gross Pay: 480

   Changing double quotes to single quotes causes the interpreter
   to treat the expression as a string literal.  With double quotes,
   the interpreter evaluates any variables and operators that may
   be in the expression.  This single versus double quote nuance
   is interesting because many other languages treat single
   and double quotes as identical in terms of string functionality.


4. Hours Worked: 40

   Pay Rate: 12

   Adding // to the last print statement comments it out, meaning
   the interpreter will ignore it completely.  It's a classic way to
   quickly test the effect of removing statements in a program during
   the development process.


5. Parse error: syntax error, unexpected '<', expecting end of file in 
   /students/ggorlen/public_html/cs130a/lab02.php on line 22

   Removing the closing ?> bracket causes the PHP preprocessor to 
   parse the remaining HTML in the document as PHP code, which quickly 
   goes sour when it runs into the < in the </body> tag, and the 
   script fails to execute.
 
6. Notice: Use of undefined constant payRate - assumed 'payRate' in 
   /students/ggorlen/public_html/cs130a/lab02.php on line 19
   Hours Worked: 40

   Pay Rate: 12

   Gross Pay: 0

   Removing the dollar sign in front of a variable causes a notice 
   rather than a crash due to CCSF's lenient PHP configuration.  This
   Javascript-like perseverence is mildly disturbing, but the notice
   makes detecting and fixing it better than a silent error that may
   be the case with many such scenarios in Javascript.
   
-->
