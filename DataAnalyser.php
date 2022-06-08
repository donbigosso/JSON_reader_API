<?php 
    class DataAnalyser {
        public $json_data;
        public function __construct($json_data=0) {
            if(!@$json_data){
                throw new Exception('Please provide data to be analysed');
            }
            if((gettype($json_data) != "array")){
                throw new Exception("The data is incorrect. Make sure it's a valid array/decoded JSON.");
            }
            $this ->constructed_data = $json_data;
            
        }
        public function get_JSON_data($data){
            return  $this ->constructed_data;
        }
    }
?>