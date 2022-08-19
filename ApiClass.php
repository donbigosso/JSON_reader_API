<?php
    class ApiClass {
        public $source_file = null;
        public $destination_file = null;
        public function set_source($source){
            $this->source_file = $source;
        }
        public function set_destination($destination){
            $this->destination_file = $destination;
        }
        public function get_file_content($file){
            try {
                $file_content = @file_get_contents($file);
                if($file_content){
                    return $file_content;
                }
                else {throw new Exception("Can't read the file. Please check if the file exists.");}
            
            }
            catch (Exception $e) {
                echo 'Error: ',  $e->getMessage();
            }
        }

        public function decode_data($data){
            if($data) {
                try {
                    
                    $json_content  = json_decode($data, TRUE);
                    if($json_content){
                        return $json_content;
                    }
                    else {throw new Exception("Data is not a valid json. Can't decode. Please check it.");}
                }
                catch (Exception $e) {
                    echo 'Error: ',  $e->getMessage();
                }
            }
        }

        public function encode_data($data){
            try {
                $encoded_data = json_encode($data, JSON_UNESCAPED_UNICODE);
                return $encoded_data;
            }
            catch (Exception $e) {
                echo 'Error: ',  $e->getMessage();
            }
        }

        
    }


?>