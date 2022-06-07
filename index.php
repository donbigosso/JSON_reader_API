<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <pre>
    <?php
      include 'FileReader.php';
      try {
        $test = new FileReader("your_filename.json");
        print_r($test -> load_file());
      }
      catch(Exception $e){
        echo 'Error: ', $e->getMessage(), " ";
      }
     

    ?>
    </pre>
  </body>
</html>
