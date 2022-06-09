<?php 
    class DataAnalyser {
        public $json_data;
        public function __construct($json_data=0) {
            if(!@$json_data){
                throw new Exception("The data is incorrect. Make sure it's a valid not empty array/decoded JSON.");
            }
            if((gettype($json_data) != "array")){
                throw new Exception("The data is incorrect. Make sure it's a valid array/decoded JSON.");
            }
            $this ->constructed_data = $json_data;
       
        }
        public function get_data_length(){
            if (count($this ->constructed_data) == 0){
                throw new Exception("The object is empty.");
            }
            return count($this ->constructed_data);
        }
        public function get_index_0(){
            if((gettype($this ->constructed_data[0]) != "array")){
                throw new Exception("First element must be an array.");
            }
            return $this ->constructed_data[0];
        }

        public function get_keys_from_0_index(){
            return array_keys($this -> get_index_0());
        }
        
    }
?>