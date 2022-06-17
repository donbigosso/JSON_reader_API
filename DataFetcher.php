<?php
  class DataFetcher {
      public function __construct() {
        $this->posted_data = file_get_contents("php://input");
        $this->decoded_data = json_decode($this->posted_data, TRUE);
      }

      public function print_data(){
         echo "Task: ".$this->decoded_data["task"]."\n";
         echo "File name: ".$this->decoded_data["filename"]."\n";
         echo "Current index: ".$this->decoded_data["index"]."\n";
         print_r($this->decoded_data["data"]);
      }
      
      public function return_index(){
         return $this->decoded_data["index"];
      }

      public function return_entry(){
         return $this->decoded_data["data"];
      }

      public function return_filename(){
         return $this->decoded_data["filename"];
      }

  }

?>
