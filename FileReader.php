<?php
    class FileReader {
        public $path_to_file;
        public function __construct($path_to_file = "") {
            if((gettype($path_to_file) != "string") or !$path_to_file){
                throw new Exception('file path incorrect or not provided.');
            }
            $this ->constructed_path = $path_to_file;
            
        }
        public function check_if_json(){
            $lenght_of_path = strlen($this->constructed_path);
            if ($lenght_of_path < 5){
                throw new Exception('Name of the file is too short.');
            }
            $extension = strtolower(substr($this->constructed_path,-5));
            
            if ($extension != ".json"){
                throw new Exception('File must be a JSON.');
            }
            return $this->constructed_path;
        }
        public function load_file(){
            $file_path = $this-> check_if_json();
            if(!@file_get_contents($file_path)){
                throw new Exception("File not found. Please check the path.");
            }
            $file_content = file_get_contents($file_path);
            return $file_content;
        }
    }
?>