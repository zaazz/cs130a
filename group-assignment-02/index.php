<?php
  if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
  }
?>

<html>
  <head>
    <title>Group assignment 02: functions and forms</title>
    <style>
      body {
        font-family: "helvetica";
        font-size: 15px;
      }
      form input {
        text-align: right;
      }
    </style>
  </head>
  <body>
    <h1>Sign-up for our thing!</h1>

    <?php

      // Validates a user's form input
      function validateRegistration()  {
          global $firstname,$lastname,$email,$color;
          $firstname = $_GET['firstname'];
          $lastname = $_GET['lastname'];
          $email = $_GET['email'];
          $color = $_GET['color'];
        // todo
        // use regex for email validation
      }

      // Prints a user's registration information
  function outputRegistration($firstname,$lastname,$email,$color) {
      echo "<br><br>Welcome ".$firstname." ! <br>";
      echo "Your registration information has been recorded as follows..<br>";
      echo "First name: $firstname<br>";
      echo "Last name: $lastname<br>";
      echo "Email: $email<br>";
      echo "Color: $color<br><br>";
  }

      // Sends the pre-set user registration form to the DOM
      function displayRegistrationForm() {
        echo "<form method='GET' action='group_assignment02.php'>
                <table>
                  <tr>
                    <td>
                      First name:
                    </td>
                    <td>
                      <input name=\"firstname\" type=\"text\"
                        size=15 required autofocus>&nbsp;
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Last name:
                    </td>
                    <td>
                      <input name=\"lastname\" type=\"text\"
                        size=15 required>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Email:
                    </td>
                    <td>
                      <input name=\"email\" type=\"text\"
                        size=15 required>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Favorite color:
                    </td>
                    <td>
                      <input name=\"color\" type=\"text\"
                        size=15 required>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type=\"submit\">
                      <input type=\"reset\">
                    </td>
                    <td></td>
                  </tr>
                </table>
              </form>";
      }

      // Show the user the registration form
      displayRegistrationForm();

      // If a form has been submitted, process it and display the result
      if (count($_GET) && isset($_GET["firstname"])) {
        print "Form submitted...";
        validateRegistration();
        outputRegistration($firstname,$lastname,$email,$color);
      }

    ?>

  </body>
</html>
