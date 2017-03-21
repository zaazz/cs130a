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
        // todo
        // use regex for email validation
      }

      // Prints a user's registration information
      function outputRegistration(/** parameters here **/) {
        // todo
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

        // validateRegistration()
        // outputRegistration()
      }

    ?>

  </body>
</html>
