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
      $new_entry = [
        "name" => "Koniec i kropka",
        "engine" => 19,
        "production_date" => 1966,
        "price" => 1666,
        "availability" => false,
        "pic" => "kapusta",
      ];
      
     // include 'FileReader.php';
      include 'DataModifier.php';
      include 'FileWriter.php';
      try {
        
        $test = new FileWriter("motorbikeList.json");
        $leszek = new DataModifier($test->load_file());
        $test->write_data_to_file($leszek -> change_value_in_index(2,"pic","naleśniki"));
        $after_edit = new DataModifier($test->load_file());
        var_dump($after_edit);
       
        
      }
      catch(Exception $e){
        echo 'Error: ', $e->getMessage(), " ";
      }
     

    ?>
    </pre>
  </body>
</html>
