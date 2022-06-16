<?php
   include 'FileWriter.php';
   include 'DataModifier.php';
   $posted_data = file_get_contents("php://input");
   $decoded_data = json_decode($posted_data, TRUE);
   $input_data= ($decoded_data["data"]);
   $file_to_be_modified = new FileWriter('motorbikeList.json');
   $modifier = new DataModifier($file_to_be_modified->load_file());
   print_r ($modifier -> add_object_to_data_beg($input_data));


?>
