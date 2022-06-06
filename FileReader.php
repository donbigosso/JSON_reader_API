<?php
    class FileReader {
        protected $path_to_file;
        public function __construct($path_to_file = "") {
            if((gettype($path_to_file) != "string") or !$path_to_file){
                throw new Exception('Please provide a path to file including filename (if file is not in the same folder). Make sure you are providing a string value.');
            }
            $this ->test_string = $path_to_file;
            
        }
        public function test_function(){
            echo $this->test_string;
        }
    }
?>