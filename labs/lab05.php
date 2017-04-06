<?php
  include_once('../printable.php');
?>
<html>
  <head>
    <title>Lab 05</title>

    <style>
      body {
        font-family: "helvetica";
        font-size: 16px;
      }
      form input {
        text-align: right;
      }
      table td {
        text-align: right;
      }
    </style>

  </head>
  <body>

    <?php
      
      // display the calculator input form
      print "<h1>Car Loan Payment Calculator</h1>";
      print "<form method=\"POST\" =\"lab05.php\"><table>";
      print "<tr><td>Total amount of loan: </td><td><input type=\"num\" ";
      print "size=10 required autofocus name=\"total_amount\"></td></tr>";
      print "<tr><td>Interest rate %: </td><td><input type=\"num\" size=10";
      print " required name=\"interest_rate\"></td></tr>";
      print "<tr><td>Number of months: </td><td><input type=\"num\" ";
      print "required size=10 name=\"num_months\"></td></tr>";
      print "<tr><td></td><td><input type=\"submit\" value=\"Calculate\">";
      print "</td></tr></table></form>"; 
    
      // check if a form was submitted
      if (count($_REQUEST) && isset($_REQUEST['total_amount'])) {

        // grab input values from form
        $totalAmount = floatval($_REQUEST['total_amount']);
        $interestRate = floatval($_REQUEST['interest_rate']) * .01;
        $numMonths = floatval($_REQUEST['num_months']);

        // validate input
        if ($totalAmount === 0.0 || $interestRate === 0.0 || $numMonths === 0.0) {
          print "<p>Invalid input.  Try again.</p>";
          exit;
        }
          
        // calculate monthly payment 
        $payment = $totalAmount * ($interestRate / 12) * 
                   ((pow((1 + ($interestRate / 12)), $numMonths)) / 
                   (pow((1 + ($interestRate / 12)), $numMonths) - 1));
        
        // output result 
        printf("<p>Monthly payment: <strong>$%.2f</strong></p>", $payment);
      } 

    ?>

  </body>
</html>
