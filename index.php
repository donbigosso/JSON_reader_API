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
      include 'DataAnalyser.php';
      try {
        
        $test = new FileReader("wpisy.json");
        $janal = new DataAnalyser($test -> load_file());
        var_dump($janal);
      }
      catch(Exception $e){
        echo 'Error: ', $e->getMessage(), " ";
      }
     

    ?>
    </pre>
  </body>
</html>
