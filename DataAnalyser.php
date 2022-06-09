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

        public function check_the_first_index(){
            $main_keys = array_keys($this ->constructed_data);
            return $main_keys[0];
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

        public function get_keys(){
            $first_index = $this->check_the_first_index();
            if ($first_index === 0){
                return array_keys($this -> get_index_0());
            }
            else {
                return array_keys($this ->constructed_data);
            }
        }
        public function check_key_consistency(){
            $data = $this ->constructed_data;
            $key_array = $this -> get_keys();
            foreach($data as $key => $value){
                if (array_keys($value) != $key_array) {
                    throw new Exception("Keys are inconsistent. First occurence at index: ".$key);
                }
            }

        }
        public function get_value($index, $key_name){
            
            $last_index = $this->get_data_length()-1;
            $key_array = $this->get_keys();
            $key_strings = implode(", ",$key_array);
            if ($this->check_the_first_index()!==0){
                throw new Exception("Data must consist of indexed key -> value arrays. The first key of provided data is '{$this->check_the_first_index()}' and it must be a '0' index.");
            }
            if ((gettype($index) != "integer") or $index < 0 or $index > $last_index){
                throw new Exception("Key must be an integer value between 0 and ".$last_index);
            }
            if (!in_array($key_name, $key_array)){
                throw new Exception("Key '{$key_name}' is not present in the data. Please choose one of the following keys: {$key_strings}");
            }
            if (gettype($this ->constructed_data[$index][$key_name]) == "array"){
                throw new Exception("Currently multidimentional arrays are not supported. Key '{$key_name}' of index {$index} is an array.");
            }
            return $this ->constructed_data[$index][$key_name];
        }



        
    }
?>