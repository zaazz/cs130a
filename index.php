<?php
  include_once('printable.php');
?> 
<html lang="en">
  <head>

    <!-- include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
    
    <!-- include Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
      body {
        font-size: 16px;
        margin: 20px;
      }

      .assignmentstable {
        width: 600px;
        margin-bottom: 20px;
      }

      .assignmentstable td, th {
        padding: 5px;
        border: 1px solid #aaa;
      }

      .assignmentstable tr {
        background-color: transparent;
        transition: background-color 0.5s;
      }

      .assignmentstable tr:hover {
        background-color: #eee;
      }
    </style>

    <title>Gorlen -- CS130A PHP Programming</title>

  </head>
  <body>

    <h2>Greg Gorlen's CS130A PHP Programming Page</h2>

    <h4>Today's date:
    <?php
      echo date(DATE_RFC2822);
      $urlPath=dirname($_SERVER['SCRIPT_URL']).'/';
      $labsPath=$urlPath.'labs/';
    ?>
    </h4>

    <p>Links to my assignments are here:</p>
    <table class="assignmentstable">
      <tr>
        <th>Lab #</th>
        <th>Source URL(s)</th>
        <th>URL(s)</th>
        <th>Description</th>
      </tr>
      <tr>
        <th>1</th>
        <td><a href="<?=$urlPath?>index.php?source">Lab 1 source code</a></td>
        <td><a href="<?=$urlPath?>index.php">Lab 1</a></td>
        <td>This page</td>
      </tr>
      <tr>
        <th>2</th>
        <td><a href="<?=$labsPath?>lab02.php?source">Lab 2 source code</a></td>
        <td><a href="<?=$labsPath?>lab02.php">Lab 2</a></td>
        <td>Variables</td>
      </tr>
      <tr>
        <th>3</th>
        <td><a href="<?=$labsPath?>lab03.php?source">Lab 3 source code</a></td>
        <td><a href="<?=$labsPath?>lab03.php">Lab 3</a></td>
        <td>Types and constants</td>
      </tr>
      <tr>
        <th>4</th>
        <td><a href="<?=$labsPath?>lab04.php?source">Lab 4 source code</a></td>
        <td><a href="<?=$labsPath?>lab04.php">Lab 4</a></td>
        <td>Arrays</td>
      </tr>
      <tr>
        <th>5</th>
        <td><a href="<?=$labsPath?>lab05.php?source">Lab 5 source code</a></td>
        <td><a href="<?=$labsPath?>lab05.php">Lab 5</a></td>
        <td>Forms</td>
      </tr>
      <tr>
        <th>6</th>
        <td><a href="<?=$labsPath?>lab06.php?source">Lab 6 source code</a></td>
        <td><a href="<?=$labsPath?>lab06.php">Lab 6</a></td>
        <td>Conditionals</td>
      </tr>
      <tr>
        <th>7</th>
        <td><a href="<?=$labsPath?>lab07.php?source">Lab 7 source code</a></td>
        <td><a href="<?=$labsPath?>lab07.php">Lab 7</a></td>
        <td>Loops</td>
      </tr>
      <tr>
        <th>8</th>
        <td><a href="<?=$labsPath?>lab08.php?source">Lab 8 source code</a></td>
        <td><a href="<?=$labsPath?>lab08.php">Lab 8</a></td>
        <td>Functions</td>
      </tr>
      <tr>
        <th>9</th>
        <td><a href="<?=$labsPath?>lab09.php?source">Lab 9 source code</a></td>
        <td><a href="<?=$labsPath?>lab09.php">Lab 9</a></td>
        <td>Classes</td>
      </tr>
      <tr>
        <th>10</th>
        <td><a href="<?=$labsPath?>lab10.php?source">Lab 10 source code</a></td>
        <td><a href="<?=$labsPath?>lab10.php">Lab 10</a></td>
        <td>Files</td>
      </tr>
    </table>
    <table class="assignmentstable">
      <tr>
        <th>Group Lab #</th>
        <th>Source URL(s)</th>
        <th>URL(s)</th>
        <th>Description</th>
      </tr>
      <tr>
        <th>2</th>
        <td><a href="group-assignment-02/index.php?source">Group lab 2 source code</a></td>
        <td><a href="group-assignment-02/index.php">Group lab 2</a></td>
        <td>Forms</td>
      </tr>
      <tr>
        <th>3</th>
        <td>
          <ul style="list-style: none; padding-left: 0px;">
            <li><a href="group-assignment-03/index.php?source">index.php</a></li>
            <li><a href="group-assignment-03/shape.class.php?source">shape.class.php</a></li>
            <li><a href="group-assignment-03/vector.class.php?source">vector.class.php</a></li>
            <li><a href="group-assignment-03/circle.class.php?source">circle.class.php</a></li>
            <li><a href="group-assignment-03/triangle.class.php?source">triangle.class.php</a></li>
            <li><a href="group-assignment-03/rectangle.class.php?source">rectangle.class.php</a></li>
            <li><a href="group-assignment-03/rendering.php?source">rendering.php</a></li>
          </ul>
        </td>
        <td><a href="group-assignment-03/index.php">Group lab 3</a></td>
        <td>Classes and inheritance</td>
      </tr>
    </table>

    <div style="font-size: 11px; ">
      <?="Last modified: " . 
         date ("F d Y H:i:s.", getlastmod());?>
      <br />
      <a href="http://hills.ccsf.edu/~ggorlen/">Return home</a>
    </div>

  </body>
</html>
