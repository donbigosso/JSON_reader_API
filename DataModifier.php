<?php
    include 'DataAnalyser.php';
    class DataModifier extends DataAnalyser{
        
        public function remove_index($index){
            //$this->check_key_consistency();
            $data = $this ->constructed_data;
            $this -> check_index($index);
            array_splice($data, $index, 1);
            return $data;
        }
        public function change_value_in_index($index,$key,$new_value){
            $data = $this ->constructed_data;
            $this -> check_index($index);
            $this -> check_key($key);
            $data[$index][$key] = $new_value;
            return $data;
        }
        public function add_object_to_data_end($object){
            $data = $this ->constructed_data;
            $key_array = $this->get_keys();
            $key_strings = implode(", ",$key_array);
            if ($key_array != array_keys($object)){
                throw new Exception("One or more keys of the the entry do not match the data keys. Please use the following {$key_strings}.");
            }
            array_push($data, $object);
            return $data;
        }
        public function add_object_to_data_beg($object){
            $data = $this ->constructed_data;
            $key_array = $this->get_keys();
            $key_strings = implode(", ",$key_array);
            if ($key_array != array_keys($object)){
                throw new Exception("One or more keys of the the entry do not match the data keys. Please use the following {$key_strings}.");
            }
            array_unshift($data, $object);
            return $data;
        }
    }
    

?>