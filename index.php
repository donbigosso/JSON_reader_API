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
        "name" => "Furo Maduro",
        "engine" => 666,
        "production_date" => 1966,
        "price" => 1666,
        "availability" => true,
        "pic" => "kaszanka",
      ];
      
      include 'FileReader.php';
      include 'DataModifier.php';
      try {
        
        $test = new FileReader("motorbikeList.json");
        $janal = new DataModifier($test_array);
        //$janal = new DataModifier($test->load_file());
        //var_dump($janal -> remove_index(0));
        var_dump($janal -> add_object_to_data_beg($new_entry));
        //$janal -> get_keys_from_index_0();
        
      }
      catch(Exception $e){
        echo 'Error: ', $e->getMessage(), " ";
      }
     

    ?>
    </pre>
  </body>
</html>
