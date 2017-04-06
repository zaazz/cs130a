<?php
  include_once('../printable.php');
?>
<html>
  <head>
    <title>Lab 06</title>

    <?php
      
      // boolean flag for displaying error message
      $error = false;
      
      // check if a form was submitted
      if (count($_GET) && isset($_GET['textcolor'])) {

        // grab input values from form
        $textColor = $_GET['textcolor'];
        $bgColor = $_GET['bgcolor'];

        // validate input
        if ($textColor === $bgColor) {
          $error = true;
        }
        else {
          print "<style>body { background-color: $bgColor;
                 color: $textColor; }</style>";
        }
      } 

    ?>

    <style>
      body {
        font-family: "helvetica";
        font-size: 20px;
      }
      form input {
        text-align: right;
      }
      table td {
        font-family: "helvetica";
        font-size: 20px;
        text-align: right;
      }
    </style>

  </head>
  <body>
    <div style="width:50%;">   
      <h2>Text and background color playground</h2>
      <form method='GET' action='lab06.php'>
        <table>
          <tr>
            <td>
              Text color: 
              <select name="textcolor">
                <option value="#000">Black</option>
                <option value="#fff">White</option>
                <option value="#ff0000">Red</option>
                <option value="#00ff00">Green</option>
                <option value="#0000ff">Blue</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              Background color: 
              <select name="bgcolor">
                <option value="#fff">White</option>
                <option value="#000">Black</option>
                <option value="#ff0000">Red</option>
                <option value="#00ff00">Green</option>
                <option value="#0000ff">Blue</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit"> 
            </td>
          </tr>
        </table>
      </form>
  
      <?php 
        if ($error) {
          print "<div><em>Text and background colors
                 cannot be the same.  Try again.</em></div>";
        }
      ?>

      <hr>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna 
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit 
        esse cillum dolore eu fugiat nulla pariatur. Excepteur 
        sint occaecat cupidatat non proident, sunt in culpa qui 
        officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </body>
</html>
