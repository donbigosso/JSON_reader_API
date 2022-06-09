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
      $test_array = [
        [
        "name" => "Turbo enduro",
        "engine" => 150,
        "production_date" => 1998,
        "price" => 2000,
        "availability" => false,
        "pic" => "enduro"
        ],
        [ "name" => "Cross Super",
        "engine" => 250,
        "production_date" => 2006,
        "price" => 2500,
        "availability" => true,
        "pic" => "cross"]
      ];
      $test_array_2 = [1,2,3,4,5,6];
      
      include 'FileReader.php';
      include 'DataAnalyser.php';
      try {
        
        $test = new FileReader("motorbikeList.json");
        //$janal = new DataAnalyser($test_array);
        $janal = new DataAnalyser($test->load_file());
        //print_r($janal -> get_keys_from_0_index());
        echo $janal -> get_value(5,"pic");
        //$janal -> check_the_first_index();
        //print_r($janal);
      }
      catch(Exception $e){
        echo 'Error: ', $e->getMessage(), " ";
      }
     

    ?>
    </pre>
  </body>
</html>
