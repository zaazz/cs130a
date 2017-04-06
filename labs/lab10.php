<?php
  include_once('../printable.php');
?>
<html>
  <head>
    <title>Lab 10</title>

    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
    <style>
      body {
        font-family: "helvetica";
        font-size: 14px;
        width: 95%;
      }

      a {
        color: #000;
      }

      a:hover {
        text-decoration: none;
      }

      .main {
        margin: 30px;
      }

      .gallery td {
        padding: 5px;
      }

      #uploadercontainer {
        margin-top: 60px;
      }

      #uploader {
      }
  
      #uploader th {
        padding-bottom: 9px;
        padding-top: 9px;
      }
 
      #uploader td {
        padding-bottom: 4px;
        padding-top: 4px;
      }
 
      #uploader input {
        font-family: "helvetica";
      }
    </style>
  </head>
  <body>
    <div class="main">   
      <?php
        /*
         * File upload/directory manipulation exercise
         */


        // Directory for storing uploaded files
        const UPLOADS_PATH = 'uploads/';

        // Upload validation parameters
        const MAX_FILE_SIZE = 50000;
        const ALLOWED_FILE_TYPES = ['image/gif' /*, 'image/jpeg', 'image/png' */ ];


        // Process file upload if posted
        if (is_array($_FILES) && count($_FILES) && 
            isset($_FILES['uploaded'])) {

          // Grab uploaded file array and process each file
          $files = $_FILES['uploaded'];
          foreach ($files['name'] as $k => $file) {

            // Check for an error and validate the file size and type
            if ($files['error'][$k] === UPLOAD_ERR_OK && 
                $files['size'][$k] <= MAX_FILE_SIZE &&
                in_array($files['type'][$k], ALLOWED_FILE_TYPES)) {

              // Retrieve the tmp_name of this file
              $tempName = $files['tmp_name'][$k];

              // Determine the name of the original upload
              $name = basename($file);

              // Move the file to the uploads directory
              move_uploaded_file($tempName, UPLOADS_PATH . $name);
            }
          }
        }


        // Display uploaded images
        $files = glob(UPLOADS_PATH . '*');
        $break = floor(sqrt(count($files)));
        echo '<table class="gallery"><tr>';
        for ($i = 0; $i < count($files); $i++) {
          if ($i % $break === 0 && $i !== 0) {
            echo '</tr><tr>';
          }
          echo '<td><img src=' . $files[$i] . '></img></td>';
        }
        echo '</tr></table>';


        // Print image upload form
        echo "<div class='draggable' id='uploadercontainer'>
                <div id='showuploader'><a href='#'>Add an image</a></div><br />
                <form enctype='multipart/form-data' action='${_SERVER['SCRIPT_URL']}' method='POST'>
                  <table id='uploader'>
                    <tr>
                      <td>
                        <input type='hidden' name='MAX_FILE_SIZE' value='" . MAX_FILE_SIZE . "'>
                        <input name='uploaded[]' type='file' />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type='submit' value='Upload' />&nbsp;
                        <em style='font-size: 11px;'>gif image less than 50 kb only</em>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>";
      ?>
    </div>

      <script>
        $(document).ready(function() {

          $(".draggable").draggable();

          $("#showuploader").click(function(){
            $("#uploader").toggle();
          });
        });
      </script>
  </body>
</html>
