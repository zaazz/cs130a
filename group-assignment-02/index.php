<?php
  if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
  }
?>

<!-- 
  Contributors: Ted Herr, Greg Gorlen 
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Group assignment 02: functions and forms</title>
    <style>
      body {
        margin: 50px;
        font-family: "helvetica";
        font-size: 15px;
        width: 95%;
      }
      form input {
        text-align: right;
        font-family: "helvetica";
        font-size: 15px;
      }
      h1 {
        font-size: 35px;
      }
      #main {
        margin-left: auto;
        margin-right: auto;
        width: 350px; 
        border: 1px solid #aaa;
        border-radius: 10px;
        padding: 5px 25px 25px 25px;
      }
      .regform table {
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      .regform td {
        padding: 4px;
      }
      .regform tr {
        background-color: #fff;
        transition: background-color 0.5s;
      }
      .regform tr:hover {
        background: #f2f2f2;
      }
      .regoutput table {
        margin-bottom: 20px;
      }
      .regoutput td {
        padding: 4px;
      }
      .larger {
        font-size: 17px;
      }
    </style>
  </head>
  <body>
    <div id="main">
      <h1 style="text-align: center;">Sign-up for our site!</h1>
      <?php

        // Prints a pre-set user registration form
        function displayRegistrationForm() {
          echo '<form class="regform" method="POST" action="group_assignment02.php">
                  <table>
                    <tr>
                      <td>First name:</td>
                      <td>
                        <input name="firstname" type="text"
                          size=15 required autofocus>&nbsp;
                      </td>
                    </tr>
                    <tr>
                      <td>Last name:</td>
                      <td>
                        <input name="lastname" type="text" 
                          size=15 required>
                      </td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td>
                        <input name="email" type="text"
                          size=15 required>
                      </td>
                    </tr>
                    <tr>
                      <td>Favorite color:</td>
                      <td>
                        <input name="color" type="text"
                          size=15 required>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td style="text-align: right;">
                        <input type="submit">
                        <input type="reset">&nbsp;
                      </td>
                    </tr>
                  </table>
                </form>';
        } // end displayRegistration

        // Validates a user's form input
        // All fields must be present with a valid email address
        function validateRegistration($data)  {
          return $data['first'] && $data['last'] && 
                 $data['email'] && $data['color'] &&
                 filter_var($data['email'], FILTER_VALIDATE_EMAIL); 
        } // end validateRegistration

        // Prints a user's registration information
        function outputRegistration($data) {
          echo '<table class="regoutput">
                  <tr>
                    <td class="larger"><em>Welcome, ' . $data['first'] . '!</em></td>
                  </tr>
                  <tr>
                    <td>
                      Your registration information has been recorded as follows:
                    </td>
                  </tr>
                </table>
                <table class="regoutput larger">
                  <tr>
                    <td>First name:</td>
                    <td><strong>' . $data['first'] . '</strong></td>
                  </tr>
                  <tr>
                    <td>Last name:</td>
                    <td><strong>' . $data['last'] . '</strong></td>
              </tr>
              <tr>
                <td>Email:</td>
                <td><strong>' . $data['email'] . '</strong></td>
                  </tr>
                  <tr>
                    <td>Favorite color:</td>
                    <td><strong>' . $data['color'] . '</strong></td>
                  </tr>
                </table>';
        } // end outputRegistration


        // Show the user the registration form
        displayRegistrationForm();

        // If a form has been submitted, process it
        if (count($_POST)) {
   
          // Retrieve data from form
          $data = [];
          $data['first'] = $_POST['firstname'];
          $data['last'] = $_POST['lastname'];
          $data['email'] = $_POST['email'];
          $data['color'] = $_POST['color'];

          // Display confirmation or failure
          if (validateRegistration($data)) {
            outputRegistration($data);
          }
          else {
            echo '<div><strong>Invalid registration information</strong></div>';
          }
        }
      ?>
    </div>
  </body>
</html>
