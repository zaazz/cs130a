<?php
  include_once('../printable.php');
?>
<html>
  <head>
    <title>Lab 07</title>
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
      <h2>Multiplication table</h2>
      <form method='GET' action='lab07.php'>
        <table>
          <tr>
            <td>
              Enter table size between 1 and 10:
            </td>
          </tr>
          <tr>
            <td>
              <input name="tablesize" type="number" 
                size=5 required autofocus>
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit"> 
            </td>
          </tr>
        </table>
      </form>
    </div>
    <?php

      // verify request exists before running script
      if (isset($_GET['tablesize'])) {
      
        // grab input from get request
        $size = $_GET['tablesize'];

        // validate input
        if (is_numeric($size)) {
          $size = intval($size);
        }
        else {
          print "<em>Size must be a valid number.
                 </em></body></html>";
          die;
        }

        if ($size < 1 || $size > 10) {
          print "<em>Size may not be less than 1 or
                 greater than 10.</em></body></html>";
          die;
        }

        // create result array
        $result = []; 
        for ($i = 1; $i <= $size; $i++) {
          for ($j = 1; $j <= $size; $j++) {
            $result[$i][$j] = $i * $j;
          }
        }

        // output result with formatting
        print "<table id=\"output\"><tr><th></th>";
        for ($i = 1; $i <= $size; $i++) {
          print "<th>$i</th>";
        }

        for ($i = 1; $i <= $size; $i++) {
          print "<tr><th>$i</th>";
          for ($j = 1; $j <= $size; $j++) {
            print "<td>$i&nbsp;*&nbsp;$j&nbsp;=&nbsp;" . 
                  $result[$i][$j] . "</td>";
          }
          print "</tr>";
        }
        print "</table>";

        // unformatted output
        //print_r($result);
      }
    ?>
  </body>
</html>
