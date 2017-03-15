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
  
    <?php
    
      /**************************/
      /* php script placeholder */
      /**************************/
      
      // prints a form to collect registration data from a user
      function displayForm() {
        // todo: determine variables        
      }
      
      // prints a user's registration information
      function output(/** parameters here **/) {
        // todo
      }
      
    ?>    
  </body>
</html>
