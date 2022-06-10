<?php
    include "FileReader.php";
    class FileWriter extends FileReader{
       public function write_data_to_file($data){
            $this->local_or_remote_path();
            $file_name = $this ->constructed_path;
            $encoded_data = json_encode($data, JSON_UNESCAPED_UNICODE);
            $my_file = fopen($file_name, 'w') or die('There was an error when trying to write to: '.$file_name);
            fwrite($my_file,$encoded_data);
            fclose($my_file);
       }
     
        
    }
?>