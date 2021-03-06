<?php
    class FileReader {
        public $path_to_file;
        public function __construct($path_to_file = "") {
            if((gettype($path_to_file) != "string") or !$path_to_file){
                throw new Exception('File path incorrect or not provided.');
            }
            $this ->constructed_path = $path_to_file;
        }
        
        public function check_if_json(){
            $extension = strtolower(substr($this->constructed_path,-5));
            if ($extension != ".json"){
                throw new Exception('File must be a JSON.');
            }
            return $this->constructed_path;
        }

        public function local_or_remote_path(){
           $path = $this->constructed_path;
           $lower_case_path = strtolower($path);
           $has_html = substr($lower_case_path, 0, 4 ) === "http";
           if($has_html){
                throw new Exception("Only local file can be written into.");
           }
        }

        public function load_file(){
            $file_path = $this-> check_if_json();
            if(!@file_exists($file_path)){
                throw new Exception("File not found. Please check the path.");
            }
            $file_json_content  = json_decode(file_get_contents($file_path), TRUE);
            if (!$file_json_content){
                throw new Exception('JSON provided is incorrect. Please check its content'); 
            }
            return $file_json_content;
        }
    }
?>